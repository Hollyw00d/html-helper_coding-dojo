<?php
class HTML_Helper
{

    public function print_table($tableArr)
    {

        echo '
    <table id="users">
        <thead>
            <tr>
                <th>First Name</th><th>Last Name</th><th>Nickname</th>
            </tr>
        </thead>
    ';
        echo '
        <tbody>
        ';

            foreach($tableArr as $key => $value)
            {
                echo '<tr><td>' . $value['first_name'] . '</td>'
                    . '<td>' . $value['last_name'] . '</td>'
                    . '<td>' . $value['nickname'] . '</td></tr>';
            }

        echo '
        </tbody>
    </table>';

        return $this;
    }

    public function print_select($selectTagArr)
    {


    }
}

// Array to be used for the print_table METHOD of the
// HTML_Helper CLASS
$users = [
    ['first_name' => 'Tiger', 'last_name' => 'Woods', 'nickname' => 'The Tiger'],
    ['first_name' => 'Amal', 'last_name' => 'Clooney', 'nickname' => 'The Amal'],
    ['first_name' => 'Catherine', 'last_name' => 'II', 'nickname' => 'The Great'],
    ['first_name' => 'Brad', 'last_name' => 'Pit', 'nickname' => 'Mr. Big'],
    ['first_name' => 'Black', 'last_name' => 'Widow', 'nickname' => 'The Assassin'],
    ['first_name' => 'Duane', 'last_name' => 'Johnson', 'nickname' => 'The Rock']
];

// Array to be used for the print_select METHOD of the
// HTML_Helper CLASS
$states = ["AK","AL","AR","AZ","CA","CO","CT","DC","DE","FL","GA","GU","HI","IA","ID", "IL","IN","KS","KY","LA","MA","MD","ME","MH","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY", "OH","OK","OR","PA","PR","PW","RI","SC","SD","TN","TX","UT","VA","VI","VT","WA","WI","WV","WY"];

?>