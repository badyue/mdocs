$(function() {
    $("#header-search-type").mouseenter(function(){
        $("#search-type-options").show();
    }).mouseleave(function(){
        $("#search-type-options").hide();
    });
    $("#search-type-options li").click(function(e){
        searchid = $(this).data("module");
        $("#destoon_moduleid").val(searchid);
        $("#search-type-options").hide();
        $("#search-type-display").html($(this).find("a").text());
    });
    $("#search-type-options a").click(function(e){
        e.preventDefault();
    });
});