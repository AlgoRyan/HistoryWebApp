// Authored by Chuqi Yang(cqyang@student.unimelb.edu.au) and Ryan Hodgman(contact.hodgman.r@gmail.com)
(function ($) {
	'use strict';

	$(document).ready(function() {
		// Sets the initial CS of the HOME nav element.
		$.setNavCSS("#nav_Home");
		/*------------------ User Entry Scrolling Functions ----------*/
		// The height of a user entry.
		var frame_size = 515;
		// Calls the user entry display to scroll in a specified direction.
		$.scrollFrame = function(button, direction, num_frames) {
			var button_parent = button.parentNode;
			var entry_frame = button_parent.children[4];
			// NOTE: getComputedStyle is not implemented in <IE9!
			var style = window.getComputedStyle(entry_frame, null);
			var top_val = parseInt(style.top, 10) - 45;
			var current_frame = Math.floor(-(top_val/frame_size));
			// Scroll up.
			if(direction == 'up') {
				$.setToFrame(entry_frame, current_frame - 1, num_frames);
			}
			// Scroll down.
			if(direction == 'down') {
				$.setToFrame(entry_frame, current_frame + 1, num_frames);
			}
		}
		// Scrolls to the last frame in the user entry display.
		$.scrollToSubmit = function(button) {
			var button_parent = button.parentNode;
			var next_div = button_parent.nextSibling;
			// Check that the next sibling is not whitespace.
			while(next_div && next_div.nodeType != 1) {
				next_div = next_div.nextSibling;
			}
			var entry_frame = next_div.children[4];
			var style = window.getComputedStyle(entry_frame, null);
			var height = parseInt(style.height, 10) - 45;
			var num_frames = Math.floor(height/frame_size) + 1;
			$.setToFrame(entry_frame, num_frames - 1, num_frames);
		}
		// Scrolls to either the first or last user entry.
		$.scrollToEnds = function(button, frame) {
			var button_parent = button.parentNode;
			var entry_frame = button_parent.children[4];
			var style = window.getComputedStyle(entry_frame, null);
			var height = parseInt(style.height, 10) - 45;
			var num_frames = Math.floor(height/frame_size) + 1;
			if(frame == 'first') {
				$.setToFrame(entry_frame, 0, num_frames);
			} else if(frame == 'last') {
				$.setToFrame(entry_frame, num_frames - 2, num_frames);
			}
			
		}
		// Sets the displayed user entry to a specified frame number.
		$.setToFrame = function(entry_frame, frame_num, num_frames) {
			// Ensure that the user can't scroll out of bounds.
			if(frame_num >= 0 && frame_num < num_frames) {
				entry_frame.style.top = (45 - frame_num*frame_size) + "px";
			}
		}
		/*------------------ User Submission Functions ---------------*/
		// Displays the picture to be uploaded.
		$.readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					var display = input.parentNode.children[8].children[0];
					display.setAttribute('src', e.target.result);
					display.style.maxWidth = "150px";
                                };
                        reader.readAsDataURL(input.files[0]);
                   }
                };
                // Writes a text max length warning.
                $.lengthWarning = function(input, max_length) {
                	var user_input = input.value;
                	var next_div = input.nextSibling;
			// Check that the next sibling is not whitespace and finds the warning field.
			while(next_div && next_div.nodeType != 1 && next_div.className != "warning_message") {
				next_div = next_div.nextSibling;
			}
			var warning_field = next_div;
			// Display the warning message if greater than the maximum length.
                	if (user_input.length > max_length) {
                		warning_field.innerHTML = "Too Long! Maximum " + max_length + " characters!";
                	}
                	else {
                		warning_field.innerHTML = "";
                	}
                };
                /*---------------------- Nav-bar Functions -------------------*/
                // Scrolls the page to the specified element ID.
                $('#navbar a.year').on('click', function(e) {
			e.preventDefault();
			var target = $(this).attr('href');
			var pos = $(target).parents('.page').position().left - 150;
			var scrollPercent = (pos / ($('.front.scroll').width() - window.innerWidth)).toFixed(4);
			var top = scrollPercent * ($('body').height() - window.innerHeight);
			$('html, body').animate({scrollTop: top+'px'}, 1200);
		});
	});
}(jQuery));
