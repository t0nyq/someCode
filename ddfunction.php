<? 
AddEventHandler("main", "OnBeforeProlog", "MyOnBeforePrologHandler", 50);

function MyOnBeforePrologHandler()
{
    function dd($x) {
        global $USER;
        $userLogin = $USER->GetLogin();
        if($userLogin == 'admin') {
            echo '<pre>';
            array_map(function($x) { var_dump($x); }, func_get_args());
            echo '</pre>';
            die;
        }
    }
}
?>