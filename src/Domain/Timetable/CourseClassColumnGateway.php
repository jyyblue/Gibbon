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

namespace Gibbon\Domain\Timetable;

use Gibbon\Domain\Traits\TableAware;
use Gibbon\Domain\QueryCriteria;
use Gibbon\Domain\QueryableGateway;

/**
 * @version v25
 * @since   v16
 */
class CourseClassColumnGateway extends QueryableGateway
{
    use TableAware;

    private static $tableName = 'gibbonClassColumn';
    private static $primaryKey = 'gibbonClassColumnID';

    public function getClassColumnByClassAndDay($gibbonCourseClassID, $gibbonDaysOfWeekID)
    {
        $data = array('gibbonCourseClassID' => $gibbonCourseClassID, 'gibbonDaysOfWeekID'=> $gibbonDaysOfWeekID);
        $sql = "SELECT gibbonClassColumnID, gibbonCourseClassID FROM gibbonClassColumn WHERE gibbonCourseClassID=:gibbonCourseClassID AND gibbonDaysOfWeekID=:gibbonDaysOfWeekID";

        return $this->db()->selectOne($sql, $data);
    }

    public function getCourseColumnByID($gibbonClassColumnID)
    {
        $data = array('gibbonClassColumnID' => $gibbonClassColumnID);
        $sql = "SELECT gibbonClassColumnID, gibbonCourseID, gibbonDaysOfWeekID FROM gibbonClassColumn WHERE gibbonClassColumnID=:gibbonClassColumnID";

        return $this->db()->selectOne($sql, $data);
    }

    public function selectCourseColumnRowsByID($gibbonClassColumnID)
    {
        $data = array('gibbonClassColumnID' => $gibbonClassColumnID);
        $sql = "SELECT gibbonClassColumnRow.gibbonClassColumnRowID, gibbonClassColumnRow.name, nameShort, timeStart, timeEnd, gibbonClassColumnRow.type, gibbonSpace.name as roomName 
                FROM gibbonClassColumnRow
                LEFT JOIN gibbonSpace ON gibbonClassColumnRow.gibbonSpaceID=gibbonSpace.gibbonSpaceID 
                WHERE gibbonClassColumnID=:gibbonClassColumnID
                ORDER BY timeStart, gibbonClassColumnRow.name";

        return $this->db()->select($sql, $data);
    }

    public function insertColumn(array $data)
    {
        $sql = "INSERT INTO gibbonClassColumn SET gibbonCourseClassID=:gibbonCourseClassID, gibbonDaysOfWeekID=:gibbonDaysOfWeekID ON DUPLICATE KEY UPDATE gibbonCourseClassID=:gibbonCourseClassID";

        return $this->db()->insert($sql, $data);
    }

    public function insertColumnRow(array $data)
    {
        $sql = "INSERT INTO gibbonClassColumnRow SET gibbonClassColumnID=:gibbonClassColumnID, name=:name, nameShort=:nameShort, timeStart=:timeStart, timeEnd=:timeEnd, type=:type ON DUPLICATE KEY UPDATE gibbonClassColumnID=:gibbonClassColumnID";

        return $this->db()->insert($sql, $data);
    }
}
