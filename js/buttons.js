    // View Button Functionality
    $('.view-btn').click(function() {
        var capacity = $(this).data('capacity');
        $('#capacity-body').text('Capacity: ' + capacity);
      });
  
      // Comment Button Functionality
      $('.comment-btn').click(function() {
        // Toggle visibility of the comment section for the current card
        $(this).closest('.card-body').find('.comment-section').toggle();
      });
  
      // Post Comment Button Functionality
      $('.post-comment-btn').click(function() {
        // Find the textarea and comment section for the current card
        var commentSection = $(this).closest('.card-body').find('.comment-section');
        var commentText = commentSection.find('textarea').val();
        
        // You can handle posting the comment here, e.g., displaying it in the card, or sending it to a server, etc.
        var comment = $('<div>').addClass('comment').html('<p>' + commentText + '</p>');
        
        // Add edit and delete buttons to the comment
        var commentActions = $('<div>').addClass('comment-actions');
        var editButton = $('<button>').addClass('btn btn-sm btn-primary edit-comment-btn').text('Edit');
        var deleteButton = $('<button>').addClass('btn btn-sm btn-danger delete-comment-btn').text('Delete');
        
        commentActions.append(editButton, deleteButton);
        comment.append(commentActions);
        
        // Append the comment to the comments section
        commentSection.find('.comments').append(comment);
        
        // Clear the textarea after posting the comment
        commentSection.find('textarea').val('');
      });
  
      // Edit Comment Button Functionality
      $(document).on('click', '.edit-comment-btn', function() {
        var comment = $(this).closest('.comment');
        var commentText = comment.find('p').text();
        var textarea = $('<textarea>').addClass('form-control').attr('rows', '3').val(commentText);
        var postButton = $('<button>').addClass('btn btn-primary mt-2 update-comment-btn').text('Update');
        var cancelButton = $('<button>').addClass('btn btn-secondary mt-2 cancel-edit-btn').text('Cancel');
        
        // Replace comment text with textarea for editing
        comment.find('p').replaceWith(textarea);
        comment.find('.comment-actions').empty().append(postButton, cancelButton);
      });
  
      // Update Comment Button Functionality
      $(document).on('click', '.update-comment-btn', function() {
        var comment = $(this).closest('.comment');
        var updatedText = comment.find('textarea').val();
        comment.find('textarea').replaceWith('<p>' + updatedText + '</p>');
        comment.find('.comment-actions').empty().append('<button class="btn btn-sm btn-primary edit-comment-btn">Edit</button>', '<button class="btn btn-sm btn-danger delete-comment-btn">Delete</button>');
      });
  
      // Cancel Edit Button Functionality
      $(document).on('click', '.cancel-edit-btn', function() {
        var comment = $(this).closest('.comment');
        var currentText = comment.find('textarea').val();
        comment.find('textarea').replaceWith('<p>' + currentText + '</p>');
        comment.find('.comment-actions').empty().append('<button class="btn btn-sm btn-primary edit-comment-btn">Edit</button>', '<button class="btn btn-sm btn-danger delete-comment-btn">Delete</button>');
      });
  
      // Delete Comment Button Functionality
      $(document).on('click', '.delete-comment-btn', function() {
        $(this).closest('.comment').remove();
      });