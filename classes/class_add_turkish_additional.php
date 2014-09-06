<?php 


require_once("functions.php");

class add_turkish_additional
{ 
	 
	    public $text;
		public $additional;
		public $additional_type;
		public $text_width_additional;
		




	public function __construct($text,$additional_type, $ayrac)
	{  
	     $this->text = $text ;
		 $this->text_width_additional = $text ;
		 $this->additional_type = $additional_type ;  
		 $this->ayrac = $ayrac ;
		 
		 $this->add_additional_to_text() ;

	}

	public function add_additional_to_text(){
		


		
		
		  if($this->additional_type==1){
		         
				 
				$text = $this->text_width_additional ;


 $istisnalar1 = array();
 $istisnalar1[0] = "alaçatı" ; 

 $istisnalar2 = array();
 $istisnalar2[0] = "parkı" ; 


 
         $text = kucult($text);
         
		 
		 $tex_kucuk_hal = $text ;

          $ters_text = utf8_strrev($text);
 
 $unlu_harfler = array("a","e","ı","i","o","ö","u","ü"); 
 
 $ismin_i_hali = array("i","ı","u","ü"); 
 
 $sert_unsuzlar = array("f","s","t","k","ç","ş","h","p"); 
 
 		     $harfler1 = array("a","o");  //da
	         $harfler2 = array("e","ö");  //de
	         $harfler3 = array("i","ü");  //nde
	         $harfler4 = array("ı","u");  //nda


         $h1	= mb_substr($ters_text, 0,1); //sondan 1.
         $h2	= mb_substr($ters_text, 1,1); // sondan 2.
		 $h3	= mb_substr($ters_text, 2,1); // sondan 3.


		if (in_array($h1, $harfler1))
		{
			 $ek ="da" ; 
		}elseif(in_array($h1, $harfler2)){
			   $ek ="de" ; 
			}elseif(in_array($h1, $harfler3)){
				$ek ="de" ; 
				}elseif(in_array($h1, $harfler4)){
					$ek ="da" ; 
					}else{
                              
							  $ek_harf1 ="" ; 
							  $ek_harf2 ="" ; 
 
                             
							 
                            if(in_array($h1, $sert_unsuzlar)){
							   $ek_harf1 = "t" ; 
							}else{
							   $ek_harf1 = "d" ; 
							}
							
							

if (in_array($h2, $harfler1) or in_array($h2, $harfler4))
		{
			 $ek_harf2 ="a" ; 
		}elseif(in_array($h2, $harfler2) or in_array($h2, $harfler3)){
			   $ek_harf2 ="e" ; 
			}else if (in_array($h3, $harfler1) or in_array($h3, $harfler4))
		{
			 $ek_harf2 ="a" ; 
		}elseif(in_array($h3, $harfler2) or in_array($h3, $harfler3)){
			   $ek_harf2 ="e" ; 
			}else{
			
			 $ek_harf2 ="e" ;  
			
			}

 $ek =  $ek_harf1.$ek_harf2 ;

			                }    

							  $ek_harf_bas = "";
 
if(in_array($h1, $unlu_harfler) && in_array($h3, $unlu_harfler) &&  !in_array($h2, $unlu_harfler) &&  in_array($h1, $ismin_i_hali) && !in_array(get_last_word_in_string($tex_kucuk_hal), $istisnalar1) ){
													   $ek_harf_bas = "n" ; 
												 }elseif(in_array(get_last_word_in_string($tex_kucuk_hal), $istisnalar2)){
														
														
												$ek_harf_bas = "n" ; 		
														}



 

  $text_son =  $this->text.$this->ayrac.$ek_harf_bas.$ek ;
  
  $this->text_width_additional = $text_son ;
  $this->additional = $ek_harf_bas.$ek ;

		  }
		 
		 
    
	}  
	  
	  


	
}






?>