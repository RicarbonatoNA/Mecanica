<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteCont;
use App\Http\Controllers\EmpleadoCont;
use App\Http\Controllers\TrabajoCont;
use App\Http\Controllers\ServicioCont;
use App\Http\Controllers\EstadoCont;
use App\Http\Controllers\ProveedoresCont;
use App\Http\Controllers\UnidadCont;
use App\Http\Controllers\TrabajoReaCont;
use App\Http\Controllers\ServicioReaCont;
use App\Http\Controllers\SucursalesCont;
use App\Http\Controllers\RefaccionesCont;
use App\Http\Controllers\TrasladoCont;
use App\Http\Controllers\InventarioCont;
use App\Http\Controllers\FacturaCont;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::group(['prefix' => 'cliente'], function(){
    Route::post('/InsertarCliente',[ClienteCont::class, 'Insertar']);
    Route::delete('/EliminarCliente/{id}',[ClienteCont::class, 'Eliminar']);
    Route::post('/ModificarCliente/{id}',[ClienteCont::class, 'Modificar']);
    Route::get('/MostrarCliente',[ClienteCont::class, 'Mostrar']);
});

Route::group(['prefix' => 'empleado'], function(){
    Route::post('/InsertarEmpleado',[EmpleadoCont::class, 'Insertar']);
    Route::delete('/EliminarEmpleado/{id}',[EmpleadoCont::class, 'Eliminar']);
    Route::post('/ModificarEmpleado/{id}',[EmpleadoCont::class, 'Modificar']);
    Route::get('/MostrarEmpleado',[EmpleadoCont::class, 'Mostrar']);
});

Route::group(['prefix' => 'trabajo'], function(){
    Route::post('/InsertarTrabajo',[TrabajoCont::class, 'Insertar']);
    Route::delete('/EliminarTrabajo/{id}',[TrabajoCont::class, 'Eliminar']);
    Route::post('/ModificarTrabajo/{id}',[TrabajoCont::class, 'Modificar']);
    Route::get('/MostrarTrabajo',[TrabajoCont::class, 'Mostrar']);
});    

Route::group(['prefix' => 'servicio'], function(){
    Route::post('/InsertarServicio',[ServicioCont::class, 'Insertar']);
    Route::delete('/EliminarServicio/{id}',[ServicioCont::class, 'Eliminar']);
    Route::post('/ModificarServicio/{id}',[ServicioCont::class, 'Modificar']);
    Route::get('/MostrarServicio',[ServicioCont::class, 'Mostrar']);
});   

Route::group(['prefix' => 'estado'], function(){
    Route::post('/InsertarEstado',[EstadoCont::class, 'Insertar']);
    Route::delete('/EliminarEstado/{id}',[EstadoCont::class, 'Eliminar']);
    Route::post('/ModificarEstado/{id}',[EstadoCont::class, 'Modificar']);
    Route::get('/MostrarEstado',[EstadoCont::class, 'Mostrar']);
});

Route::group(['prefix' => 'proveedores'], function(){
    Route::post('/InsertarProveedor',[ProveedoresCont::class, 'Insertar']);
    Route::delete('/EliminarProveedor/{id}',[ProveedoresCont::class, 'Eliminar']);
    Route::post('/ModificarProveedor/{id}',[ProveedoresCont::class, 'Modificar']);
    Route::get('/MostrarProveedor',[ProveedoresCont::class, 'Mostrar']);
});  

Route::group(['prefix' => 'unidad'], function(){
    Route::post('/InsertarUnidad',[UnidadCont::class, 'Insertar']);
    Route::delete('/EliminarUnidad/{id}',[UnidadCont::class, 'Eliminar']);
    Route::post('/ModificarUnidad/{id}',[UnidadCont::class, 'Modificar']);
    Route::get('/MostrarUnidad',[UnidadCont::class, 'Mostrar']);
});  

Route::group(['prefix' => 'trabajo_rea'], function(){
    Route::post('/InsertarTrabajoRealizado',[TrabajoReaCont::class, 'Insertar']);
    Route::delete('/EliminarTrabajoRealzado/{id}',[TrabajoReaCont::class, 'Eliminar']);
    Route::post('/ModificarTrabajoRealizado/{id}',[TrabajoReaCont::class, 'Modificar']);
    Route::get('/MostrarTrabajoRealizado',[TrabajoReaCont::class, 'Mostrar']);
});  

Route::group(['prefix' => 'servicio_rea'], function(){
    Route::post('/InsertarServicioRealizado',[ServicioReaCont::class, 'Insertar']);
    Route::delete('/EliminarServicioRealizado/{id}',[ServicioReaCont::class, 'Eliminar']);
    Route::post('/ModificarServicioRealizado/{id}',[ServicioReaCont::class, 'Modificar']);
    Route::get('/MostrarServicioRealizado',[ServicioReaCont::class, 'Mostrar']);
}); 

Route::group(['prefix' => 'sucursal'], function(){
    Route::post('/InsertarSucursal',[SucursalesCont::class, 'Insertar']);
    Route::delete('/EliminarSucursal/{id}',[SucursalesCont::class, 'Eliminar']);
    Route::post('/ModificarSucursal/{id}',[SucursalesCont::class, 'Modificar']);
    Route::get('/MostrarSucursales',[SucursalesCont::class, 'Mostrar']);
}); 

Route::group(['prefix' => 'refaccion'], function(){
    Route::post('/InsertarRefaccion',[RefaccionesCont::class, 'Insertar']);
    Route::delete('/EliminarRefaccion/{id}',[RefaccionesCont::class, 'Eliminar']);
    Route::post('/ModificarRefaccion/{id}',[RefaccionesCont::class, 'Modificar']);
    Route::get('/MostrarRefacciones',[RefaccionesCont::class, 'Mostrar']);
});  

Route::group(['prefix' => 'traslado'], function(){
    Route::post('/InsertarTraslado',[TrasladoCont::class, 'Insertar']);
    Route::delete('/EliminarTraslado/{id}',[TrasladoCont::class, 'Eliminar']);
    Route::post('/ModificarTraslado/{id}',[TrasladoCont::class, 'Modificar']);
    Route::get('/MostrarTraslado',[TrasladoCont::class, 'Mostrar']);
}); 

Route::group(['prefix' => 'inventario'], function(){
    Route::post('/InsertarInventario',[InventarioCont::class, 'Insertar']);
    Route::delete('/EliminarInventario/{id}',[InventarioCont::class, 'Eliminar']);
    Route::post('/ModificarInventario/{id}',[InventarioCont::class, 'Modificar']);
    Route::get('/MostrarInventario',[InventarioCont::class, 'Mostrar']);
});  

Route::group(['prefix' => 'factura'], function(){
    Route::post('/InsertarFactura',[FacturaCont::class, 'Insertar']);
    Route::delete('/EliminarFactura/{id}',[FacturaCont::class, 'Eliminar']);
    Route::post('/ModificarFactura/{id}',[FacturaCont::class, 'Modificar']);
    Route::get('/MostrarFactura',[FacturaCont::class, 'Mostrar']);
}); 