jQuery(".layout-slider").each(function(){var e=this,t=jQuery(e).find(".carousel").flickity({prevNextButtons:!1,pageDots:!1,wrapAround:!0,cellAlign:"left"}),i=t.data("flickity"),n=jQuery(e).find(".button-group--cells"),c=n.find(".button");t.on("change.flickity",function(){console.log(i.selectedIndex),c.filter(".is-selected").removeClass("is-selected"),c.eq(i.selectedIndex).addClass("is-selected")}),n.on("click",".button",function(){var e=jQuery(this).index();t.flickity("select",e)}),jQuery(e).find(".button--previous").on("click",function(){t.flickity("previous")}),jQuery(e).find(".button--next").on("click",function(){t.flickity("next")})});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInRlbXBsYXRlLWNvbXBvbmVudHMvbGF5b3V0cy9ob21lcGFnZS1tYWluLXNsaWRlciBjb3B5LmpzIl0sIm5hbWVzIjpbImpRdWVyeSIsImVhY2giLCJ0aGF0IiwidGhpcyIsIiRnYWxsZXJ5IiwiZmluZCIsImZsaWNraXR5IiwicHJldk5leHRCdXR0b25zIiwicGFnZURvdHMiLCJ3cmFwQXJvdW5kIiwiY2VsbEFsaWduIiwiZmxrdHkiLCJkYXRhIiwiJGNlbGxCdXR0b25Hcm91cCIsIiRjZWxsQnV0dG9ucyIsIm9uIiwiY29uc29sZSIsImxvZyIsInNlbGVjdGVkSW5kZXgiLCJmaWx0ZXIiLCJyZW1vdmVDbGFzcyIsImVxIiwiYWRkQ2xhc3MiLCJpbmRleCJdLCJtYXBwaW5ncyI6IkFBQUFBLE9BQU8sa0JBQWtCQyxLQUFLLFdBQzFCLElBQUlDLEVBQU9DLEtBRVBDLEVBQVdKLE9BQU9FLEdBQU1HLEtBQUssYUFBYUMsU0FBUyxDQUNuREMsaUJBQWlCLEVBQ2pCQyxVQUFVLEVBQ1ZDLFlBQVksRUFDWkMsVUFBVyxTQUlYQyxFQUFRUCxFQUFTUSxLQUFLLFlBR3RCQyxFQUFtQmIsT0FBT0UsR0FBTUcsS0FBSyx3QkFDckNTLEVBQWVELEVBQWlCUixLQUFLLFdBR3pDRCxFQUFTVyxHQUFHLGtCQUFtQixXQUMzQkMsUUFBUUMsSUFBSU4sRUFBTU8sZUFDbEJKLEVBQWFLLE9BQU8sZ0JBQ2ZDLFlBQVksZUFDakJOLEVBQWFPLEdBQUdWLEVBQU1PLGVBQ2pCSSxTQUFTLGlCQUlsQlQsRUFBaUJFLEdBQUcsUUFBUyxVQUFXLFdBQ3BDLElBQUlRLEVBQVF2QixPQUFPRyxNQUFNb0IsUUFDekJuQixFQUFTRSxTQUFTLFNBQVVpQixLQUdoQ3ZCLE9BQU9FLEdBQU1HLEtBQUsscUJBQXFCVSxHQUFHLFFBQVMsV0FDL0NYLEVBQVNFLFNBQVMsY0FHdEJOLE9BQU9FLEdBQU1HLEtBQUssaUJBQWlCVSxHQUFHLFFBQVMsV0FDM0NYLEVBQVNFLFNBQVMiLCJmaWxlIjoidGVtcGxhdGUtY29tcG9uZW50cy9sYXlvdXRzL2hvbWVwYWdlLW1haW4tc2xpZGVyIGNvcHkuanMiLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoJy5sYXlvdXQtc2xpZGVyJykuZWFjaChmdW5jdGlvbigpIHtcbiAgICB2YXIgdGhhdCA9IHRoaXM7XG4gICAgXG4gICAgdmFyICRnYWxsZXJ5ID0galF1ZXJ5KHRoYXQpLmZpbmQoJy5jYXJvdXNlbCcpLmZsaWNraXR5KHtcbiAgICAgICAgcHJldk5leHRCdXR0b25zOiBmYWxzZSxcbiAgICAgICAgcGFnZURvdHM6IGZhbHNlLFxuICAgICAgICB3cmFwQXJvdW5kOiB0cnVlLFxuICAgICAgICBjZWxsQWxpZ246ICdsZWZ0JyxcbiAgICB9KTtcblxuICAgIC8vIEZsaWNraXR5IGluc3RhbmNlXG4gICAgdmFyIGZsa3R5ID0gJGdhbGxlcnkuZGF0YSgnZmxpY2tpdHknKTtcblxuICAgIC8vIGVsZW1lbnRzXG4gICAgdmFyICRjZWxsQnV0dG9uR3JvdXAgPSBqUXVlcnkodGhhdCkuZmluZCgnLmJ1dHRvbi1ncm91cC0tY2VsbHMnKTtcbiAgICB2YXIgJGNlbGxCdXR0b25zID0gJGNlbGxCdXR0b25Hcm91cC5maW5kKCcuYnV0dG9uJyk7XG5cbiAgICAvLyB1cGRhdGUgc2VsZWN0ZWQgY2VsbEJ1dHRvbnNcbiAgICAkZ2FsbGVyeS5vbignY2hhbmdlLmZsaWNraXR5JywgZnVuY3Rpb24gKCkge1xuICAgICAgICBjb25zb2xlLmxvZyhmbGt0eS5zZWxlY3RlZEluZGV4KTtcbiAgICAgICAgJGNlbGxCdXR0b25zLmZpbHRlcignLmlzLXNlbGVjdGVkJylcbiAgICAgICAgICAgIC5yZW1vdmVDbGFzcygnaXMtc2VsZWN0ZWQnKTtcbiAgICAgICAgJGNlbGxCdXR0b25zLmVxKGZsa3R5LnNlbGVjdGVkSW5kZXgpXG4gICAgICAgICAgICAuYWRkQ2xhc3MoJ2lzLXNlbGVjdGVkJyk7XG4gICAgfSk7XG5cbiAgICAvLyBzZWxlY3QgY2VsbCBvbiBidXR0b24gY2xpY2tcbiAgICAkY2VsbEJ1dHRvbkdyb3VwLm9uKCdjbGljaycsICcuYnV0dG9uJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgaW5kZXggPSBqUXVlcnkodGhpcykuaW5kZXgoKTtcbiAgICAgICAgJGdhbGxlcnkuZmxpY2tpdHkoJ3NlbGVjdCcsIGluZGV4KTtcbiAgICB9KTtcbiAgICAvLyBwcmV2aW91c1xuICAgIGpRdWVyeSh0aGF0KS5maW5kKCcuYnV0dG9uLS1wcmV2aW91cycpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJGdhbGxlcnkuZmxpY2tpdHkoJ3ByZXZpb3VzJyk7XG4gICAgfSk7XG4gICAgLy8gbmV4dFxuICAgIGpRdWVyeSh0aGF0KS5maW5kKCcuYnV0dG9uLS1uZXh0Jykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAkZ2FsbGVyeS5mbGlja2l0eSgnbmV4dCcpO1xuICAgIH0pO1xufSk7XG4iXX0=