$(document).ready(function(){
$('.le_submit').on('click',function(){
$('<a class="the_message">Test</a>').appendTo('.contextual_message').fadeOut(8600).css("color","green");
//Context Message: {Success:Fail}
});
//Add Partner
$('.partner_create_button').on('click',function(){
$('<article class="crud_item"><span class="delete_partner">Delete Partner</span><br/><label class="name_label">Partner Name</label><input class="text_element" type="text" /><label class="name_label">Partner URL</label><input class="text_element" type="text" /><label class="name_label">Partner Logo</label><input  class="text_element"type="text" /><span class="get_image_from_the_media_centre">Get Image From Media Centre</span><label class="name_label">Partner Status</label><select class="text_element"><option>Published</option><option>Pending Approval</option><option>In Future</option></select></article>').appendTo('.partners_holder');
});
//Delete Partner
$(document).on('click', '.delete_partner', function(){
alert('delete partner');
});
//Add Sidebar
$('.sidebar_create_button').on('click',function(){
$('<article class="crud_sidebar"><span class="delete_sidebar">Delete Sidebar</span><br/><label class="name_label">Sidebar Name</label><input class="text_element" type="text" /></article>').appendTo('.sidebars_holder');
});
//Delete Sidebar
$(document).on('click', '.delete_sidebar', function(){
alert('delete sidebar');
});
/**
Prevent Defaults
*/
$('.original_array').on('click',function(e){
e.preventDefault();
});
$('.posted_data').on('click',function(e){
e.preventDefault();
});
$('.the_merged').on('click',function(e){
e.preventDefault();
});
});
