<?php

namespace App\Http\Controllers;
use App\Control;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $result=  DB::select(DB::raw("SELECT 
                IFNULL(SUM(IF(month = 'Jan', total, 0)),0) AS 'Ene',
                IFNULL(SUM(IF(month = 'Feb', total, 0)),0) AS 'Feb',
                IFNULL(SUM(IF(month = 'Mar', total, 0)),0) AS 'Mar',
                IFNULL(SUM(IF(month = 'Apr', total, 0)),0) AS 'Abr',
                IFNULL(SUM(IF(month = 'May', total, 0)),0) AS 'May',
                IFNULL(SUM(IF(month = 'Jun', total, 0)),0) AS 'Jun',
                IFNULL(SUM(IF(month = 'Jul', total, 0)),0) AS 'Jul',
                IFNULL(SUM(IF(month = 'Aug', total, 0)),0) AS 'Ago',
                IFNULL(SUM(IF(month = 'Sep', total, 0)),0) AS 'Sep',
                IFNULL(SUM(IF(month = 'Oct', total, 0)),0) AS 'Oct',
                IFNULL(SUM(IF(month = 'Nov', total, 0)),0) AS 'Nov',
                IFNULL(SUM(IF(month = 'Dec', total, 0)),0) AS 'Dic',
           
            IFNULL(SUM(total),0) AS total_yearly
            FROM (
        SELECT DATE_FORMAT(date_control, '%b') AS month, SUM(amount) as total FROM controls WHERE date_control <= NOW() and date_control >= Date_add(Now(),interval - 12 month) GROUP BY DATE_FORMAT(date_control, '%m-%Y') ORDER by date_control asc) as sub
"));
        return view('pages.home', compact('result'));
    }




    public function lastmonths()
    {
        $result=  DB::select(DB::raw("SELECT IFNULL(SUM(amount),0) as total,

IFNULL((SELECT SUM(amount) from controls where year(date_control) = year(NOW()) ),0) as total_anio_actual,

IFNULL((SELECT SUM(amount) from controls where year(date_control) = year(NOW())-1 ),0) as total_anio_pasado,

IFNULL((SELECT SUM(amount) from controls where month(date_control) = month(NOW())-1 ),0) as mes_pasado,

IFNULL((SELECT SUM(amount) from controls where month(date_control) = 
if(month(NOW()) = 12, 1,month(NOW())+ 1)
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes1,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 11, 1,if(month(NOW()) = 12, 2,month(NOW()) + 2 ))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes2,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 10, 1,if(month(NOW()) = 11, 2,if(month(NOW()) = 12, 3,month(NOW()) + 3 ) ))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes3,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 9, 1,if(month(NOW()) = 10, 2,if(month(NOW()) = 11, 2,
if(month(NOW()) = 12, 4,month(NOW()) + 4 ))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes4,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 8, 1,if(month(NOW()) = 9, 2,if(month(NOW()) = 10, 3,
if(month(NOW()) = 11, 4,if(month(NOW()) = 12, 5,month(NOW()) + 5 )))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes5,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 7, 1,if(month(NOW()) = 8, 8,if(month(NOW()) = 9, 3,
if(month(NOW()) = 10, 4,if(month(NOW()) = 11, 5,if(month(NOW()) = 12, 6,month(NOW()) + 6 ))))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes6,

IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 6, 1,if(month(NOW()) = 7, 2,if(month(NOW()) = 8, 3,
if(month(NOW()) = 9, 4,if(month(NOW()) = 10, 5,if(month(NOW()) = 11, 6,
if(month(NOW()) = 12, 7,month(NOW()) + 7) ) )) )))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes7,


IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 5, 1,if(month(NOW()) = 6, 2,if(month(NOW()) = 7, 3,
if(month(NOW()) = 8, 4,if(month(NOW()) = 9, 5,if(month(NOW()) = 10, 6,
if(month(NOW()) = 11, 7,if(month(NOW()) = 12, 8,month(NOW()) + 8 ))))))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes8,


IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 4, 1,if(month(NOW()) = 5, 2,if(month(NOW()) = 6, 3,
if(month(NOW()) = 7, 7,if(month(NOW()) = 8, 5,if(month(NOW()) = 9, 6,
if(month(NOW()) = 10, 7,if(month(NOW()) = 11, 8,
if(month(NOW()) = 12, 9,month(NOW()) + 9 )))))))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes9,


IFNULL((SELECT SUM(amount) from controls where month(date_control) = 
if(month(NOW()) = 3, 1,if(month(NOW()) = 4, 2,if(month(NOW()) = 5, 3,
if(month(NOW()) = 6, 4,if(month(NOW()) = 7, 5,if(month(NOW()) = 8, 6,
if(month(NOW()) = 9, 7,if(month(NOW()) = 10, 8,if(month(NOW()) = 11, 9,
if(month(NOW()) = 12, 10,month(NOW()) + 10 ))))))))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes10,


IFNULL((SELECT SUM(amount) from controls where month(date_control) =
if(month(NOW()) = 2, 1,if(month(NOW()) = 3, 2,if(month(NOW()) = 4, 3,
if(month(NOW()) = 5, 4,if(month(NOW()) = 6, 5,if(month(NOW()) = 7, 6,
if(month(NOW()) = 8, 7,if(month(NOW()) = 9, 8,if(month(NOW()) = 10, 9,
if(month(NOW()) = 11, 10,if(month(NOW()) = 12, 11,month(NOW()) + 11 )))))))))))
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes11,

IFNULL((SELECT SUM(amount) from controls where month(date_control) = month(NOW())
 and date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control 
),0) as Mes12,
month(NOW()) as posicion

from controls
where date_control >= date_add(date_add(NOW(), INTERVAL -11 MONTH), INTERVAL - (DAY(NOW())-1) DAY)  and NOW() >= date_control "));
     //return view('pages.graphs/lastsmonths', compact('result'));
     //dd($result);
     return response()->json($result);
    
    }

    public function between2dates($start, $end){
        $result=  DB::select(DB::raw("SELECT IFNULL(SUM(amount),0) as total FROM controls WHERE date_control BETWEEN '".$start."' and '".$end."'"));
        return view('pages.graphs/between2dates', compact('result'));        
    }



    public function allmonths()
    {
        $result=  DB::select(DB::raw("SELECT 
                IFNULL(SUM(IF(month = 'Jan', total, 0)),0) AS 'Ene',
                IFNULL(SUM(IF(month = 'Feb', total, 0)),0) AS 'Feb',
                IFNULL(SUM(IF(month = 'Mar', total, 0)),0) AS 'Mar',
                IFNULL(SUM(IF(month = 'Apr', total, 0)),0) AS 'Abr',
                IFNULL(SUM(IF(month = 'May', total, 0)),0) AS 'May',
                IFNULL(SUM(IF(month = 'Jun', total, 0)),0) AS 'Jun',
                IFNULL(SUM(IF(month = 'Jul', total, 0)),0) AS 'Jul',
                IFNULL(SUM(IF(month = 'Aug', total, 0)),0) AS 'Ago',
                IFNULL(SUM(IF(month = 'Sep', total, 0)),0) AS 'Sep',
                IFNULL(SUM(IF(month = 'Oct', total, 0)),0) AS 'Oct',
                IFNULL(SUM(IF(month = 'Nov', total, 0)),0) AS 'Nov',
                IFNULL(SUM(IF(month = 'Dec', total, 0)),0) AS 'Dic',
           
            IFNULL(SUM(total),0) AS total_yearly
            FROM (
        SELECT DATE_FORMAT(date_control, '%b') AS month, SUM(amount) as total FROM controls WHERE date_control <= NOW() and date_control >= Date_add(Now(),interval - 12 month) GROUP BY DATE_FORMAT(date_control, '%m-%Y') ORDER by date_control asc) as sub
"));
     //return view('pages.graphs/lastsmonths', compact('result'));
     //dd($result);
     return response()->json($result);
    
    }



}
