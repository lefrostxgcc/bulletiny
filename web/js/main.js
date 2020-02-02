$("#tb").on("click", function()
	    {
		if ($("#testfield").is(":hidden"))
		{
		    $("#testfield").show();
		    $(this).html("Скрыть");
		}
		else
		{
		    $("#testfield").hide();
		    $(this).html("Показать")
		}
	    }
	   );

$(".infobutton").on("click", function()
		    {
			var r = $(this).data('id');
			$.ajax({
			    type: "POST",
			    url: "getinfo",
			    data: {id: r},
			    success: function(res)
			    {
				//alert(res);
				$("[data-id='" + r + "'].infofield").val(res);
			    },
			    error: function()
			    {
				alert("error!");
			    }
			});
			$("[data-id='" + r + "'].info").show();
		    }
		   );

$(".avabutton").on("click", function()
		   {
		       currPhotoId = $(this).data('id');
		       currBullId = $(this).attr('bull');
		       $.ajax({
			   type: 'POST',
			   url: 'setavatar',
			   data: {PhotoId: currPhotoId, BullId: currBullId},
			   success: function(res)
			   {
			       alert(res);
			   },
			   error: function()
			   {
			       alert('error!');
			   }
		       });
		   });

$(".infosave").on("click", function()
		  {
		      var r = $(this).data('id');
		      var info_ =
			  $("[data-id='" + r + "'].infofield").val();
		      $.ajax({
			  type: "POST",
			  url: "setinfo",
			  data: {id: r, info: info_},
			  success: function(res)
			  {
			      //alert(res);
			  },
			  error: function()
			  {
			      alert("error!");
			  }
		      });
		      //location.reload();
		      $('body').load('/photo/index');
		  }
		 );
