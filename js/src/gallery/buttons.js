function buildShareThis(url){
 var customShareThis  = "<div class='share'>";
     customShareThis += "<span class='st_facebook_hcount' displayText='Facebook' st_url='http://www.zarazadesign.com/gallery.html' st_img='"+url+"'></span> ";
     customShareThis += "<span class='st_twitter_hcount' displayText='Tweet' st_url='http://www.zarazadesign.com/gallery.html'></span>";
     customShareThis += "<span class='st_pinterest_hcount' displayText='Pinterest' st_url='http://www.zarazadesign.com/gallery.html' st_img='"+url+"' ></span>";
     customShareThis += "</div>";
     return customShareThis;
}

$(document).ready(function() {
 $(".fancybox").fancybox({
   closeClick  : false,
   nextEffect: 'fade',
   prevEffect: 'fade',
   beforeShow: function() {
     var caption =  $(this.element).data("caption") ? $(this.element).data("caption") : "";
     this.title = this.title ? this.title + buildShareThis(this.href) + caption : buildShareThis(this.href) + caption;
  },
  afterShow: function(){
     stButtons.locateElements();
  },
  helpers : {
    overlay: {closeClick: true},
    title: {type: 'inside'}
  }
 });
});
