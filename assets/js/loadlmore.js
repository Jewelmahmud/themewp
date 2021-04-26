// // This function implements a "Load More" button.
// // It assumes that there is already a matching query that has executed on the page, so this AJAX call is just a continuation of that query to grab additional posts.
// // There are no animations added here. For a smoother experience, it is a good idea to add animations to the button (ex. a loading icon during the request), or making the new posts animate in (ex, using Animate.css to fade them into the page)
// $(function() {
//     // Grab the load more button, since I only want to run the code if the button is on the page
//     var loadMoreButton = $('#load-more');
  
//     if (loadMoreButton) {
//       // Because there are already posts on the page, we need to manually tell this query what page of results to grab so that is doesn't load duplicate posts
//       var loadPosts = function(page) {
//         var theData, loadMoreContainer, errorStatus, errorMessage;
  
//         // The AJAX request
//         $.ajax({
//           url: 'http://wordpress.dev/wp-json/wp/v2/posts',
//           dataType: 'json',
//           data: { // Match the query that was already run on the page
//             'per_page': 3,
//             'page': page
//           },
//           success: function(data) {
//             // Remove the button if the response returns no items
//             if ( data.length < 1 ) {
//               loadMoreButton.remove();
//             }
  
//             // Create a place to store exactly what I need
//             // Alternatively, the response can be filtered to only return the needed data, which is probably more efficient as the following loop wont be needed
//             theData = [];
  
//             // Get only what I need, and store it
//             for (i = 0; i < data.length; i++) {
//               theData[i] = {};
//               theData[i].id = data[i].id;
//               theData[i].slug = data[i].slug;
//               theData[i].link = data[i].link;
//               theData[i].title = data[i].title.rendered;
//               theData[i].content = data[i].content.rendered;
//             }
  
//             // Grab the container where my data will be inserted
//             loadMoreContainer = $('.all-posts');
  
//             // For each object in my newly formed array, build a new element to store that data, and insert it into the DOM
//             $.each(theData, function(i) {
//               loadMoreContainer.append('<a class="card-post">' + theData[i].title + '</a>');
//             });
//           },
//           error: function(jqXHR, textStatus, errorThrown) {
//             errorStatus = jqXHR.status + ' ' + jqXHR.statusText + '\n';
//             errorMessage = jqXHR.responseJSON.message;
  
//             // Show me what the error was
//             console.log(errorStatus + errorMessage);
//           }
//         });
//       };
  
//       // Since our AJAX query is the same as the original query on the page (page 1), start with page 2
//       var getPage = 2;
  
//       // Actually implement the functionality when the button is clicked
//       loadMoreButton.on('click', function() {
//         loadPosts(getPage);
//         // Increment the page, so on the next click we get the next page of results
//         getPage++;
//       });
//     }
//   });