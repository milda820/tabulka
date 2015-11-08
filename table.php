<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

// obvykle se pouziva - '
// a pokud to neni nezbytne, tak se nemixuji " a '
// takze si to pak uprav
// dale nejaka ta stabni kultura zdrojoveho kodu
// vygoogli si PHP PSR2 
  
$persons = [
    [
        'jmeno' => 'Jana',
        'prijmeni' => 'Pitlikova',
        'vek' => '25',
        'bydliste' => 'Liberec'
    ],
    [
        'jmeno' => 'Milan',
        'prijmeni' => 'Rada',
        'vek' => '18',
        'bydliste' => 'Karlovy Vary'
   ],
   [
        'jmeno' => 'Barbora',
        'prijmeni' => 'Nováková',
        'vek' => '21',
        'bydliste' => 'Klatovy'
   ],
   [
        'jmeno' => 'Miluse',
        'prijmeni' => 'Nováková',
        'vek' => '88',
        'bydliste' => 'Praha'
   ],
   [
        'jmeno' => 'Jiri',
        'prijmeni' => 'Trnka',
        'vek' => '15',
        'bydliste' => 'Plzeň'
   ],
   [
      'jmeno' => 'Pepa',
      'prijmeni' => 'Doležal',
      'vek' => '45',
      'bydliste' => 'Rokycany'
   ]
];
?>

   
  <?php $i = 0; ?>

<table>
   <?php foreach ($persons as $person) { ?>
       <?php // $persons je tzv. vicerozmerne - multidimensional - pole ?>
       <?php // prochazim - iteruji - tedy hlavni pole, v $person je pak podpole - subarray - a vypisu jeho jednotlive prvky ?>
       <?php // $person je tzv. asociativni pole - tjn. nema ciselne - numericke klice, ale stringy - v nasem pripade jmeno, prijmeni, vek a bydliste ?>
       <?php // htmlspecialchars - podivej se do manualu a zkus mi svymi slovy popsat, k cemu je to dobre ?>
       
        
       
       
       <tr <?php echo (++$i % 2)? 'class = "strong"':'';?>>
           <td><?php echo htmlspecialchars($person['jmeno']); ?></td>
           <td><?php echo htmlspecialchars($person['prijmeni']); ?></td>
           <td><?php echo htmlspecialchars($person['vek']); ?></td>
           <td><?php echo htmlspecialchars($person['bydliste']); ?></td>
           
       </tr>
       
       
       
       
       
       
       
      <?php }?>
   <
</table>

</body>
</html>



         
