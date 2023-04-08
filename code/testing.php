<?php

require '../database/config.php';

namespace src;

class testing {

    public function userExists($userName){
        $query = "SELECT * FROM users WHERE userName='$username';";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            return true;
    }

}
}
?>