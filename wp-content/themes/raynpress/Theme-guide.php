<?php
/**
 * The template for displaying all pages
 *
 * This is the layout for homepage v1
 * 
 * Template Name: Homepage v1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raynpress
 * 
 */


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<body>

    
<main>
	
  <div class="px-4 pt-5 pb-2 my-3 text-center">
     <img class="d-block mx-auto mb-4" src="<?php echo get_template_directory_uri() ?>/assets/img/rayn.png" alt="" width="" height="">
    <h1 class="display-5 fw-bold text-body-emphasis">Welcome To RaynPress</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Just Simply install the RaynPress theme and Follow these steps to have a desired layout presented in Demo</p>

      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <!-- <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-3 col-sm-0 col-md-3 col-lg-3">
      
    </div>
	<div class="col-6 col-sm-12 col-md-6 col-lg-6">
	<ol>
			<li>Creat any page and assign that page the Hompage V1 Template</li>
			<li>From Setting > Reading > Select That page as an Hompage</li>
			<li>Create a Menu from Appearance > Menu > Create New > Assign postion Header to that Menu</li>
			<li>For Widget section in Footer Creat Widget from Appearance > Widget and > Section 1, Section 2 and Section 3 Accordingly</li>
			<li>For NewsLetter Creat a form Using WP Form and Add that form into NewsLetter widget using short code and save the widgets</li>
			
</ol>
</div>
    <div class="col-3 col-sm-0 col-md-3 col-lg-3">
         </div>
  </div>
</div>

</body>

<?php
?>