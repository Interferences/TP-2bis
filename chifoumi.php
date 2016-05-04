<!DOCTYPE html>
  <html>
    <head>
      <title>Formulaire</title>
    </head>
    
    <body>

    <label>
      <h1>Pierre, Feuille, Ciseaux</h1><br>
    </label>
    
    <h2>Choisissez votre coup :</h2>
    <a href="?coup=0"> <img src="http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/pierre.png"></a>
    <a href="?coup=1"> <img src="http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/feuille.png"></a>
    <a href="?coup=2"> <img src="http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/ciseaux.png"></a><br><br>
   
      <?php
  
       extract($_GET); 
       if(isset($coup)){
      
        $nbr=rand(0,2);
  
         
         switch($nbr){
           case 0 : echo "<a href='?coup=0'> <img src='http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/pierre.png'></a><br>";
             break;
           case 1 : echo "<a href='?coup=1'> <img src='http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/feuille.png'></a><br>";
             break;
           case 2 : echo "<a href='?coup=2'> <img src='http://preview.ix73c8h3nkpxecdiqfiqm60usl0g4x6rmhavtcoue6k73nmi.box.codeanywhere.com/img/ciseaux.png'></a><br>";
             break;   
         }
      
         
        if($coup!=2){
          if($nbr==$coup+1){
            echo "Perdu !";
          }
          else if($coup == $nbr){
           echo "Egalite try again";
          }
          else{
            echo "Gagne";
          }
        } 
       
       if($coup==2){
         if($nbr==0){
           echo "Perdu !";
         } 
         else if($coup==$nbr){
           echo "Egalite try again";
         }
         else{
           echo "Gagne";
         }
       }
       }
      
      ?>
      
      
    </body>
   
  </html>
