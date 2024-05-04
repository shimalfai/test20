<?php

function getFirstRow($sql, $mysqli)
{
    $results = $mysqli->query($sql);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            return $row;
        }
    }

    function get_user_information_sql($id)
    {
        $sql = "select * from children where child_id = :id";
        $results = $id->query($sql);
        if ($results->num_rows > 0) {
            while ($rows = $results->fetch_assoc()) {
                return $rows;
            }
        }


        function getChild_id($sql, $mysqli)
        {
            $sql = "SELECT * FROM children inner join viewchild ON viewchild_id = viewchild.child_id";
            $results = $mysqli->query($sql);
            return $results;
        }

        return [];
    }

}


