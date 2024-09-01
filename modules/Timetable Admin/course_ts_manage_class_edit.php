<?php
/*
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

use Gibbon\Forms\Form;
use Gibbon\Forms\CustomFieldHandler;
use Gibbon\Http\Url;
use Gibbon\Domain\Timetable\CourseGateway;
use Gibbon\Tables\DataTable;

if (isActionAccessible($guid, $connection2, '/modules/Timetable Admin/course_manage_class_edit.php') == false) {
    // Access denied
    $page->addError(__('You do not have access to this action.'));
} else {
    //Proceed!
    $gibbonCourseClassID = $_GET['gibbonCourseClassID'] ?? '';
    $gibbonCourseID = $_GET['gibbonCourseID'] ?? '';
    $gibbonSchoolYearID = $_GET['gibbonSchoolYearID'] ?? '';
    $search = $_GET['search'] ?? '';
    $urlParams = compact('gibbonSchoolYearID', 'search');

    $page->breadcrumbs
        ->add(__('Manage Courses & Classes'), 'course_manage.php',$urlParams)
        ->add(__('Edit Course & Classes'), 'course_manage_edit.php', $urlParams + ['gibbonCourseID' => $gibbonCourseID])
        ->add(__('Edit Columns'));

    if (!empty($search)) {
        $page->navigator->addSearchResultsAction(Url::fromModuleRoute('Timetable Admin', 'course_manage.php')->withQueryParams($urlParams));
    }

    //Check if gibbonCourseClassID, gibbonCourseID, and gibbonSchoolYearID specified
    if ($gibbonCourseClassID == '' or $gibbonCourseID == '' or $gibbonSchoolYearID == '') {
        $page->addError(__('You have not specified one or more required parameters.'));
    } else {

            $data = array('gibbonCourseID' => $gibbonCourseID, 'gibbonCourseClassID' => $gibbonCourseClassID);
            $sql = 'SELECT gibbonCourseClassID, gibbonCourseClass.name, gibbonCourseClass.nameShort, gibbonCourse.gibbonCourseID, gibbonCourse.name AS courseName, gibbonCourse.nameShort as courseNameShort, gibbonCourse.description AS courseDescription, gibbonCourse.gibbonSchoolYearID, gibbonSchoolYear.name as yearName, reportable, attendance, enrolmentMin, enrolmentMax, gibbonCourseClass.fields 
            FROM gibbonCourseClass, gibbonCourse, gibbonSchoolYear 
            WHERE gibbonCourse.gibbonCourseID=gibbonCourseClass.gibbonCourseID AND gibbonCourse.gibbonSchoolYearID=gibbonSchoolYear.gibbonSchoolYearID AND gibbonCourse.gibbonCourseID=:gibbonCourseID AND gibbonCourseClassID=:gibbonCourseClassID';
            $result = $connection2->prepare($sql);
            $result->execute($data);

        if ($result->rowCount() != 1) {
            $page->addError(__('The specified record cannot be found.'));
        } else {
            //Let's go!
            // Add Columns Table
            $values = $result->fetch();

            echo '<h2>';
            echo __('Edit Columns').' - '. $values['courseNameShort'].'.'.$values['nameShort'];
            echo '</h2>';
            $courseGateway = $container->get(CourseGateway::class);
            $columns = $courseGateway->selectColumnsByCourseClassID($gibbonCourseClassID);
            // DATA TABLE
            $table2 = DataTable::create('courseColumnManage');
            $table2->addColumn('nameShort', __('Week Day'));
            $table2->addColumn('rowCount', __('Rows'));

            // ACTIONS
            $table2->addActionColumn()
                ->addParam('gibbonCourseID', $gibbonCourseID)
                ->addParam('gibbonCourseClassID', $gibbonCourseClassID)
                ->addParam('gibbonSchoolYearID', $gibbonSchoolYearID)
                ->addParam('search', $search)
                ->addParam('gibbonClassColumnID')
                ->addParam('gibbonDaysOfWeekID')
                ->format(function ($data, $actions) {
                    $schoolDay = $data['schoolDay'];
                    $gibbonClassColumnID = $data['gibbonClassColumnID'];
                    if ($schoolDay == 'Y') {
                        if (empty($gibbonClassColumnID)) {
                            $actions->addAction('add', __('Add'))
                                ->setIcon('page_new')
                                ->setURL('/modules/Timetable Admin/course_ts_column_edit.php');
                        } else {
                            $actions->addAction('edit', __('Edit'))
                                ->setURL('/modules/Timetable Admin/course_ts_column_edit.php');

                            $actions->addAction('delete', __('Delete'))
                                ->setURL('/modules/Timetable Admin/course_ts_column_delete.php');
                        }
                    }
                });

            echo $table2->render($columns->toDataSet());

        }
    }
}
