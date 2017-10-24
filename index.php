<?php 

  class gajah {

   public $telinga = 2;
   public $kaki = 4;
   public $berat = 100; 

}

 $gajah1 = new gajah ;
 echo 'gajah mempunyai telinga' .$gajah1->telinga. '<br>';
 echo 'sedangkan mempunyai kaki' .$gajah1->kaki. '<br>';
 echo 'dan berat badan ' .$gajah1->berat. '<kg>'. '<br>' . '<br>';
 ?>



 <?php   

 class ular {

   public $kaki2 = 'tidak punya kaki'; 

}

 $ular1 = new ular ;
 echo 'ular tidak berjalan menngunakan kaki karena ' .$ular1->kaki2. '<br>' . '<br>';
 

  ?>


<?php

   class ayam {

   public $kaki3 = 2;
}

 $ayam1 = new ayam ;
 echo 'ayam berkaki' .$ayam1->kaki3. '<br>'. '<br>';
 
 ?>

 <?php

   class robot {

   public $suara;
   public $berat;


   public function set_suara ($suara)
   {
   	$this->suara=$suara;
   }
   public function get_suara()
   {
   	return $this->suara;
   }

   public function set_berat ($berat)
   {
   	$this->berat=$berat;
   }
   public function get_berat ()
   {
   	return $this->berat;
   }
}

 $robot1 = new robot ;
 $robot1->set_suara("tat tet tot");
  echo "suara robot : " .$robot1-> get_suara. '<br>';


$robot1->set_berat(10);
   echo "berat robot : " .$robot1-> get_berat. '<br>';

 
 ?>

 <?php

   class rumah {

   public $kamar= 5;
   public $tingkat= 2;
}

 $rumah1 = new rumah ;
 echo 'rumah berkamar ' .$rumah1->kamar. '<br>';
 echo 'dan rumah bertingkat ' .$rumah1->tingkat. '<br>';
 
 ?>

