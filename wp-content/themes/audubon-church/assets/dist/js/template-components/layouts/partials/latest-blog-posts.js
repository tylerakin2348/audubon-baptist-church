jQuery(".latest-blog-posts").each(function(){var e=this,t=jQuery(e).find(".carousel").flickity({prevNextButtons:!1,pageDots:!1,wrapAround:!0,cellAlign:"left"}),i=t.data("flickity"),n=jQuery(e).find(".button-group--cells"),c=n.find("button");t.on("change.flickity",function(){console.log(i.selectedIndex),c.filter(".is-selected").removeClass("is-selected"),c.eq(i.selectedIndex).addClass("is-selected")}),n.on("click","button",function(){var e=jQuery(this).index();t.flickity("select",e)}),jQuery(e).find(".button--previous").on("click",function(){t.flickity("previous")}),jQuery(e).find(".button--next").on("click",function(){t.flickity("next")})});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoidGVtcGxhdGUtY29tcG9uZW50cy9sYXlvdXRzL3BhcnRpYWxzL2xhdGVzdC1ibG9nLXBvc3RzLmpzIiwic291cmNlcyI6WyJ0ZW1wbGF0ZS1jb21wb25lbnRzL2xheW91dHMvcGFydGlhbHMvbGF0ZXN0LWJsb2ctcG9zdHMuanMiXSwic291cmNlc0NvbnRlbnQiOlsialF1ZXJ5KCcubGF0ZXN0LWJsb2ctcG9zdHMnKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgIHZhciB0aGF0ID0gdGhpcztcbiAgICBcbiAgICB2YXIgJGxhdGVzdEJsb2dQb3N0c1NsaWRlciA9IGpRdWVyeSh0aGF0KS5maW5kKCcuY2Fyb3VzZWwnKS5mbGlja2l0eSh7XG4gICAgICAgIHByZXZOZXh0QnV0dG9uczogZmFsc2UsXG4gICAgICAgIHBhZ2VEb3RzOiBmYWxzZSxcbiAgICAgICAgd3JhcEFyb3VuZDogdHJ1ZSxcbiAgICAgICAgY2VsbEFsaWduOiAnbGVmdCcsXG4gICAgfSk7XG5cbiAgICAvLyBGbGlja2l0eSBpbnN0YW5jZVxuICAgIHZhciBmbGt0eSA9ICRsYXRlc3RCbG9nUG9zdHNTbGlkZXIuZGF0YSgnZmxpY2tpdHknKTtcblxuICAgIC8vIGVsZW1lbnRzXG4gICAgdmFyICRjZWxsQnV0dG9uR3JvdXAgPSBqUXVlcnkodGhhdCkuZmluZCgnLmJ1dHRvbi1ncm91cC0tY2VsbHMnKTtcbiAgICB2YXIgJGNlbGxCdXR0b25zID0gJGNlbGxCdXR0b25Hcm91cC5maW5kKCdidXR0b24nKTtcblxuICAgIC8vIHVwZGF0ZSBzZWxlY3RlZCBjZWxsQnV0dG9uc1xuICAgICRsYXRlc3RCbG9nUG9zdHNTbGlkZXIub24oJ2NoYW5nZS5mbGlja2l0eScsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgY29uc29sZS5sb2coZmxrdHkuc2VsZWN0ZWRJbmRleCk7XG4gICAgICAgICRjZWxsQnV0dG9ucy5maWx0ZXIoJy5pcy1zZWxlY3RlZCcpXG4gICAgICAgICAgICAucmVtb3ZlQ2xhc3MoJ2lzLXNlbGVjdGVkJyk7XG4gICAgICAgICRjZWxsQnV0dG9ucy5lcShmbGt0eS5zZWxlY3RlZEluZGV4KVxuICAgICAgICAgICAgLmFkZENsYXNzKCdpcy1zZWxlY3RlZCcpO1xuICAgIH0pO1xuXG4gICAgLy8gc2VsZWN0IGNlbGwgb24gYnV0dG9uIGNsaWNrXG4gICAgJGNlbGxCdXR0b25Hcm91cC5vbignY2xpY2snLCAnYnV0dG9uJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgaW5kZXggPSBqUXVlcnkodGhpcykuaW5kZXgoKTtcbiAgICAgICAgJGxhdGVzdEJsb2dQb3N0c1NsaWRlci5mbGlja2l0eSgnc2VsZWN0JywgaW5kZXgpO1xuICAgIH0pO1xuICAgIC8vIHByZXZpb3VzXG4gICAgalF1ZXJ5KHRoYXQpLmZpbmQoJy5idXR0b24tLXByZXZpb3VzJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAkbGF0ZXN0QmxvZ1Bvc3RzU2xpZGVyLmZsaWNraXR5KCdwcmV2aW91cycpO1xuICAgIH0pO1xuICAgIC8vIG5leHRcbiAgICBqUXVlcnkodGhhdCkuZmluZCgnLmJ1dHRvbi0tbmV4dCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJGxhdGVzdEJsb2dQb3N0c1NsaWRlci5mbGlja2l0eSgnbmV4dCcpO1xuICAgIH0pO1xufSk7XG4iXSwibmFtZXMiOlsialF1ZXJ5IiwiZWFjaCIsInRoYXQiLCJ0aGlzIiwiJGxhdGVzdEJsb2dQb3N0c1NsaWRlciIsImZpbmQiLCJmbGlja2l0eSIsInByZXZOZXh0QnV0dG9ucyIsInBhZ2VEb3RzIiwid3JhcEFyb3VuZCIsImNlbGxBbGlnbiIsImZsa3R5IiwiZGF0YSIsIiRjZWxsQnV0dG9uR3JvdXAiLCIkY2VsbEJ1dHRvbnMiLCJvbiIsImNvbnNvbGUiLCJsb2ciLCJzZWxlY3RlZEluZGV4IiwiZmlsdGVyIiwicmVtb3ZlQ2xhc3MiLCJlcSIsImFkZENsYXNzIiwiaW5kZXgiXSwibWFwcGluZ3MiOiJBQUFBQSxPQUFPLHNCQUFzQkMsS0FBSyxXQUM5QixJQUFJQyxFQUFPQyxLQUVQQyxFQUF5QkosT0FBT0UsR0FBTUcsS0FBSyxhQUFhQyxTQUFTLENBQ2pFQyxpQkFBaUIsRUFDakJDLFVBQVUsRUFDVkMsWUFBWSxFQUNaQyxVQUFXLFNBSVhDLEVBQVFQLEVBQXVCUSxLQUFLLFlBR3BDQyxFQUFtQmIsT0FBT0UsR0FBTUcsS0FBSyx3QkFDckNTLEVBQWVELEVBQWlCUixLQUFLLFVBR3pDRCxFQUF1QlcsR0FBRyxrQkFBbUIsV0FDekNDLFFBQVFDLElBQUlOLEVBQU1PLGVBQ2xCSixFQUFhSyxPQUFPLGdCQUNmQyxZQUFZLGVBQ2pCTixFQUFhTyxHQUFHVixFQUFNTyxlQUNqQkksU0FBUyxpQkFJbEJULEVBQWlCRSxHQUFHLFFBQVMsU0FBVSxXQUNuQyxJQUFJUSxFQUFRdkIsT0FBT0csTUFBTW9CLFFBQ3pCbkIsRUFBdUJFLFNBQVMsU0FBVWlCLEtBRzlDdkIsT0FBT0UsR0FBTUcsS0FBSyxxQkFBcUJVLEdBQUcsUUFBUyxXQUMvQ1gsRUFBdUJFLFNBQVMsY0FHcENOLE9BQU9FLEdBQU1HLEtBQUssaUJBQWlCVSxHQUFHLFFBQVMsV0FDM0NYLEVBQXVCRSxTQUFTIn0=