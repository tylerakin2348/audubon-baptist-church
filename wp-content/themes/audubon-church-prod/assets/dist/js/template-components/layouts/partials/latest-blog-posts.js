jQuery(".latest-blog-posts").each(function(){var e=this,t=jQuery(e).find(".carousel").flickity({prevNextButtons:!1,pageDots:!1,wrapAround:!0,cellAlign:"left"}),i=t.data("flickity"),n=jQuery(e).find(".button-group--cells"),c=n.find("button");t.on("change.flickity",function(){console.log(i.selectedIndex),c.filter(".is-selected").removeClass("is-selected"),c.eq(i.selectedIndex).addClass("is-selected")}),n.on("click","button",function(){var e=jQuery(this).index();t.flickity("select",e)}),jQuery(e).find(".button--previous").on("click",function(){t.flickity("previous")}),jQuery(e).find(".button--next").on("click",function(){t.flickity("next")})});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInRlbXBsYXRlLWNvbXBvbmVudHMvbGF5b3V0cy9wYXJ0aWFscy9sYXRlc3QtYmxvZy1wb3N0cy5qcyJdLCJuYW1lcyI6WyJqUXVlcnkiLCJlYWNoIiwidGhhdCIsInRoaXMiLCIkbGF0ZXN0QmxvZ1Bvc3RzU2xpZGVyIiwiZmluZCIsImZsaWNraXR5IiwicHJldk5leHRCdXR0b25zIiwicGFnZURvdHMiLCJ3cmFwQXJvdW5kIiwiY2VsbEFsaWduIiwiZmxrdHkiLCJkYXRhIiwiJGNlbGxCdXR0b25Hcm91cCIsIiRjZWxsQnV0dG9ucyIsIm9uIiwiY29uc29sZSIsImxvZyIsInNlbGVjdGVkSW5kZXgiLCJmaWx0ZXIiLCJyZW1vdmVDbGFzcyIsImVxIiwiYWRkQ2xhc3MiLCJpbmRleCJdLCJtYXBwaW5ncyI6IkFBQUFBLE9BQU8sc0JBQXNCQyxLQUFLLFdBQzlCLElBQUlDLEVBQU9DLEtBRVBDLEVBQXlCSixPQUFPRSxHQUFNRyxLQUFLLGFBQWFDLFNBQVMsQ0FDakVDLGlCQUFpQixFQUNqQkMsVUFBVSxFQUNWQyxZQUFZLEVBQ1pDLFVBQVcsU0FJWEMsRUFBUVAsRUFBdUJRLEtBQUssWUFHcENDLEVBQW1CYixPQUFPRSxHQUFNRyxLQUFLLHdCQUNyQ1MsRUFBZUQsRUFBaUJSLEtBQUssVUFHekNELEVBQXVCVyxHQUFHLGtCQUFtQixXQUN6Q0MsUUFBUUMsSUFBSU4sRUFBTU8sZUFDbEJKLEVBQWFLLE9BQU8sZ0JBQ2ZDLFlBQVksZUFDakJOLEVBQWFPLEdBQUdWLEVBQU1PLGVBQ2pCSSxTQUFTLGlCQUlsQlQsRUFBaUJFLEdBQUcsUUFBUyxTQUFVLFdBQ25DLElBQUlRLEVBQVF2QixPQUFPRyxNQUFNb0IsUUFDekJuQixFQUF1QkUsU0FBUyxTQUFVaUIsS0FHOUN2QixPQUFPRSxHQUFNRyxLQUFLLHFCQUFxQlUsR0FBRyxRQUFTLFdBQy9DWCxFQUF1QkUsU0FBUyxjQUdwQ04sT0FBT0UsR0FBTUcsS0FBSyxpQkFBaUJVLEdBQUcsUUFBUyxXQUMzQ1gsRUFBdUJFLFNBQVMiLCJmaWxlIjoidGVtcGxhdGUtY29tcG9uZW50cy9sYXlvdXRzL3BhcnRpYWxzL2xhdGVzdC1ibG9nLXBvc3RzLmpzIiwic291cmNlc0NvbnRlbnQiOlsialF1ZXJ5KCcubGF0ZXN0LWJsb2ctcG9zdHMnKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgIHZhciB0aGF0ID0gdGhpcztcbiAgICBcbiAgICB2YXIgJGxhdGVzdEJsb2dQb3N0c1NsaWRlciA9IGpRdWVyeSh0aGF0KS5maW5kKCcuY2Fyb3VzZWwnKS5mbGlja2l0eSh7XG4gICAgICAgIHByZXZOZXh0QnV0dG9uczogZmFsc2UsXG4gICAgICAgIHBhZ2VEb3RzOiBmYWxzZSxcbiAgICAgICAgd3JhcEFyb3VuZDogdHJ1ZSxcbiAgICAgICAgY2VsbEFsaWduOiAnbGVmdCcsXG4gICAgfSk7XG5cbiAgICAvLyBGbGlja2l0eSBpbnN0YW5jZVxuICAgIHZhciBmbGt0eSA9ICRsYXRlc3RCbG9nUG9zdHNTbGlkZXIuZGF0YSgnZmxpY2tpdHknKTtcblxuICAgIC8vIGVsZW1lbnRzXG4gICAgdmFyICRjZWxsQnV0dG9uR3JvdXAgPSBqUXVlcnkodGhhdCkuZmluZCgnLmJ1dHRvbi1ncm91cC0tY2VsbHMnKTtcbiAgICB2YXIgJGNlbGxCdXR0b25zID0gJGNlbGxCdXR0b25Hcm91cC5maW5kKCdidXR0b24nKTtcblxuICAgIC8vIHVwZGF0ZSBzZWxlY3RlZCBjZWxsQnV0dG9uc1xuICAgICRsYXRlc3RCbG9nUG9zdHNTbGlkZXIub24oJ2NoYW5nZS5mbGlja2l0eScsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgY29uc29sZS5sb2coZmxrdHkuc2VsZWN0ZWRJbmRleCk7XG4gICAgICAgICRjZWxsQnV0dG9ucy5maWx0ZXIoJy5pcy1zZWxlY3RlZCcpXG4gICAgICAgICAgICAucmVtb3ZlQ2xhc3MoJ2lzLXNlbGVjdGVkJyk7XG4gICAgICAgICRjZWxsQnV0dG9ucy5lcShmbGt0eS5zZWxlY3RlZEluZGV4KVxuICAgICAgICAgICAgLmFkZENsYXNzKCdpcy1zZWxlY3RlZCcpO1xuICAgIH0pO1xuXG4gICAgLy8gc2VsZWN0IGNlbGwgb24gYnV0dG9uIGNsaWNrXG4gICAgJGNlbGxCdXR0b25Hcm91cC5vbignY2xpY2snLCAnYnV0dG9uJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgaW5kZXggPSBqUXVlcnkodGhpcykuaW5kZXgoKTtcbiAgICAgICAgJGxhdGVzdEJsb2dQb3N0c1NsaWRlci5mbGlja2l0eSgnc2VsZWN0JywgaW5kZXgpO1xuICAgIH0pO1xuICAgIC8vIHByZXZpb3VzXG4gICAgalF1ZXJ5KHRoYXQpLmZpbmQoJy5idXR0b24tLXByZXZpb3VzJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAkbGF0ZXN0QmxvZ1Bvc3RzU2xpZGVyLmZsaWNraXR5KCdwcmV2aW91cycpO1xuICAgIH0pO1xuICAgIC8vIG5leHRcbiAgICBqUXVlcnkodGhhdCkuZmluZCgnLmJ1dHRvbi0tbmV4dCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJGxhdGVzdEJsb2dQb3N0c1NsaWRlci5mbGlja2l0eSgnbmV4dCcpO1xuICAgIH0pO1xufSk7XG4iXX0=