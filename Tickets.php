$arr = new SplFixedArray(27);

for($m=1;$m<=100000;$m++) { in: $final_array = array(); foreach ( $arr as $key => $val ) $final_array[ $key+1 ] = $val;

 $elements_array=array();
 foreach ( $arr as $key => $val )
 $elements_array[ $key+1 ] = $val;

for($i=1;$i<=count($elements_array);$i++)
{

  if($i==1 || $i==10 || $i==19 )
  {
    $elements_array[$i]=rand(1,9);
  }

  if($i==2 || $i==11 || $i==20 )
  {
    $elements_array[$i]=rand(10,19);
  }

  if($i==3 || $i==12 || $i==21 )
  {
    $elements_array[$i]=rand(20,29);
  }

  if($i==4 || $i==13 || $i==22 )
  {
    $elements_array[$i]=rand(30,39);
  }
  if($i==5 || $i==14 || $i==23 )
  {
    $elements_array[$i]=rand(40,49);
  }

  if($i==6 || $i==15 ||$i==24 )
  {
    $elements_array[$i]=rand(50,59);
  }

  if($i==7 || $i==16 ||$i==25 )
  {
    $elements_array[$i]=rand(60,69);
  }

  if($i==8 || $i==17 || $i==26 )
  {
    $elements_array[$i]=rand(70,79);
  }

  if($i==9 || $i==18 || $i==27)
  {
    $elements_array[$i]=rand(80,90);
  }
}
for($k=1;$k<=5;$k++)
{
  $index1=rand(1,9);
  $final_array[$index1]=$elements_array[$index1];
}
$x1 = 0;
$ar1=[];
for($q=1;$q<=9;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar1[$x1]= $q;
        $x1++;
    }
}
loop:
if($x1 != 5)
{
    $in1 =rand(1,9);

    if(!in_array($in1, array_keys($ar1)))
    {
        $final_array[$in1]=$elements_array[$in1];
        $ar[$x1]= $in1;
        $x1++;

    }
    goto loop;
}
$z1=0;
for($q=1;$q<=9;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar1[$x1]= $q;
        $z1++;
    }
}
if($z1 != 5)
goto in;

for($l=1;$l<=5;$l++)
{
  $index2=rand(10,18);        
  $final_array[$index2]=$elements_array[$index2];

}

$x2 = 0;
$ar2=[];
for($q=10;$q<=18;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar2[$x2]= $q;
        $x2++;
    }
}
loop2:
if($x2 != 5)
{
    $in2 =rand(10,18);

    if(!in_array($in2, array_keys($ar2)))
    {
        $final_array[$in2]=$elements_array[$in2];
        $ar[$x2]= $in2;
        $x2++;

    }
    goto loop2;
}
$z2=0;
for($q=10;$q<=18;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar1[$x1]= $q;
        $z2++;
    }
}
if($z2 != 5)
goto in;

for($n=1;$n<=5;$n++)
{
  $index3=rand(19,27);

  $final_array[$index3]=$elements_array[$index3];

}

$x3 = 0;
$ar3=[];
for($q=19;$q<=27;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar3[$x3]= $q;
        $x3++;
    }
}
loop3:
if($x3 != 5)
{
    $in3 =rand(19,27);

    if(!in_array($in3, array_keys($ar3)))
    {
        $final_array[$in3]=$elements_array[$in3];
        $ar[$x3]= $in3;
        $x3++;

    }
    goto loop3;
}
$z3=0;
for($q=19;$q<=27;$q++)
{
    if(isset($final_array[$q]))
    {
        $ar3[$x3]= $q;
        $z3++;
    }
}
if($z3 != 5)
goto in;

DB::table('tambola')->insert(['a1'=>$final_array[1],
                              'a2'=>$final_array[2],
                              'a3'=>$final_array[3],
                              'a4'=>$final_array[4],
                              'a5'=>$final_array[5],
                              'a6'=>$final_array[6],
                              'a7'=>$final_array[7],
                              'a8'=>$final_array[8],
                              'a9'=>$final_array[9],
                              'b1'=>$final_array[10],
                              'b2'=>$final_array[11],
                              'b3'=>$final_array[12],
                              'b4'=>$final_array[13],
                              'b5'=>$final_array[14],
                              'b6'=>$final_array[15],
                              'b7'=>$final_array[16],
                              'b8'=>$final_array[17],
                              'b9'=>$final_array[18],
                              'c1'=>$final_array[19],
                              'c2'=>$final_array[20],
                              'c3'=>$final_array[21],
                              'c4'=>$final_array[22],
                              'c5'=>$final_array[23],
                              'c6'=>$final_array[24],
                              'c7'=>$final_array[25],
                              'c8'=>$final_array[26],
                              'c9'=>$final_array[27],
                            ]);
}
