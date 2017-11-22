app.directive("dashBord", function(){
   return {
       restrict: "E",
       template: "<li class=\"menuItem active\"><a href=\"#\"><i class=\"pe-7s-graph\"></i><p>Dashboard</p><div well-mess></div></a></li>"
   } 
});

app.directive("empCard", function(){
   return {
       restrict: "E",
       template: "<li class=\"menuItem\"><a href=\"#!/empleados\"><i class=\"pe-7s-user\"></i><p>Empleados</p></a></li>"
   } 
});

app.directive("provCard", function(){
   return {
       restrict: "E",
       template: "<li class=\"menuItem\"><a href=\"#!/proveedores\"><i class=\"pe-7s-user\"></i><p>Proveedores</p></a></li>"
   } 
});

app.directive("ventaCard", function(){
   return {
       restrict: "E",
       template: "<li class=\"menuItem\"><a href=\"#\"><i class=\"pe-7s-note2\"></i><p>Ventas</p></a></li>"
   } 
});

app.directive("invCard", function(){
   return {
       restrict: "E",
       template: "<li class=\"menuItem\"><a href=\"#\"><i class=\"pe-7s-news-paper\"></i><p>Inventario</p></a></li>"
   } 
});
