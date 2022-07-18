<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdbC extends Controller
{
    function ComputerFundamental52()
    {
        return view('ComputerFundamental52');
    }

    function ValuePass($FName, $ContactNo)
    {
        return "Name: " . $FName . " Contact No: " . $ContactNo;
    }

    function Pwad($St, $Su, $Sv)
    {
        return view('Pwad', ['StValue'=> $St,'SuValue'=> $Su,'SvValue'=> $Sv]);
    }

    function HtmlSpecialChar()
    {
        $NewsHeadLine = "<h1> Bangladesh won by 100 runs. </h1>";

        $ScriptAttack = "<script> alert('Okay?'); </script>";

        return view('HtmlSpecialChar', ['OneHeadLine'=> $NewsHeadLine, 'ScriptAttack' => $ScriptAttack]);
    }
}
