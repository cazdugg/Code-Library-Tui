<?php include 'includes/header.php' ?>
<div class="container">
    <div class="intro">
        <h1>Thomson EMPS</h1>
      
    </div>  
    

    
    
</div>
<?php    
$xml=simplexml_load_file("thomson/EMP.xml") or die("Error: Cannot create object");
foreach($xml->children() as $B) { ?>
    <section class="banner thomson">
        <div class="container">

            <h1><?php echo $B->title ?></h1>

            <div class="row">
                <div class="col-md-8">
                    <div class="well">
                        <iframe scrolling="no" src="thomson/EMPS/<?php echo $B->html ?>" width="<?php echo $B->width ?>" height="<?php echo $B->height ?>"></iframe>    
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="well pad">
                        <iframe src="thomson/EMPS/<?php echo $B->html ?>" width="340" height="<?php echo $B->height ?>"></iframe>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class= "col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Code to copy for EMP Section <button class="html" id="<?php echo $B->id ?>" data-clipboard-text="Select">Select all</button></div>
                        <div class="panel-body">
                            <textarea id="textArea<?php echo $B->id ?>">
                                <?php echo $B->code ?>
                            </textarea>
                        </div>
                    </div>

                </div>
               
            </div>

        </div>
    </section>
    
    <div class="container">
        <div class="col-md-12">
            
                <p class="EMP">Shown below are other images that can be used and are available as part of this EMP section, some may span across 2 of the tiles and the rest can be pieced together with no more than 4 tiles in a row</p>
          
        
                
                
                 <ul class="bxslider">  
            <?php           
                                 
foreach ($B->images->children() as $image) {
   
?>
    
    
     
  <li><img src="<?php echo $image ?>" title="<?php echo $image ?>" /></li>

               
                   
              
<?php } ?>
                     </ul>
                      
              
            




        </div>
    </div>
    
<?php

} 
?>

<?php include 'includes/footer.php' ?>
