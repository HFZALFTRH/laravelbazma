<?

route::get('/', function (){
    return view('welcome');

});

route::get("example", function (){
    return "example route get";

});
?>
