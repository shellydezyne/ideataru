// Scrolling sidebar for your website
// Downloaded from Marcofolio.net
// Read the full article: http://www.marcofolio.net/webdesign/create_a_sticky_sidebar_or_box.html

window.onscroll = function()
{
	if( window.XMLHttpRequest ) {
		if (document.documentElement.scrollTop > 300 || self.pageYOffset > 221) {
			$('content').style.position = 'fixed';
			$('content').style.top = '60';
		} else if (document.documentElement.scrollTop < 300 || self.pageYOffset < 221) {
			$('content').style.position = 'absolute';
			$('content').style.top = '300px';
		}
	}
}
