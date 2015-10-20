<?php include 'includes/header.php' ?>
<div class="container">
    <div class="intro">
        <h1>First Choice Sub Banners</h1>
    </div>       
</div>
<?php    
$xml=simplexml_load_file("firstChoice/SubBanners.xml") or die("Error: Cannot create object");
foreach($xml->children() as $B) { ?>
    <section class="banner firstChoice">
        <div class="container">

            <h1><?php echo $B->title ?></h1>

            <div class="row">
                <div class="col-md-8">
                    <div class="well">
                        <iframe scrolling="no" src="firstChoice/subBanners/<?php echo $B->html ?>" width="<?php echo $B->width ?>" height="<?php echo $B->height ?>"></iframe>    
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="well pad">
                        <iframe src="firstChoice/subBanners/<?php echo $B->html ?>" width="340" height="<?php echo $B->height ?>"></iframe>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class= "col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Code to copy for Main Banner <button class="html" id="<?php echo $B->id ?>" data-clipboard-text="Select">Select all</button></div>
                        <div class="panel-body">
                            <textarea id="textArea<?php echo $B->id ?>">
                                <?php echo $B->code ?>
                            </textarea>
                        </div>
                    </div>

                </div>
                <div class= "col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">CSS to copy for this particular banner <button class="css" id="<?php echo $B->id ?>" data-clipboard-text="Select">Select all</button> </div>
                        <div class="panel-body">
                            <textarea id="css_<?php echo $B->id ?>">
                                <?php echo $B->css ?>
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
<?php

} 
?>

<?php include 'includes/footer.php' ?>


