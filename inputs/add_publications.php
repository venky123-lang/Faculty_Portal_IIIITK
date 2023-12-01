<?php
require_once('navbar.php');
?>
		<br />
		<div class="container">
			<h3 align="center">Add your Publications</h3>
			<br />
			<div class="card">
				<div class="card-header">Enter your Publications</div>
				<div class="card-body">

					<form method="post" id="insert_form">
						<div class="table-repsonsive">
							<span id="error"></span>
							<table class="table table-bordered" id="item_table">
								<tr>
									<th>Publication Description</th>
                                    <th>Publication Type</th>
									<th><button type="button" name="add" class="btn btn-success btn-sm add">Add More</button></th>
								</tr>
							</table>
							<div align="center">
								<input type="submit" name="submit" id="submit_button" class="btn btn-primary" value="Insert" />
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</body>
</html>
<script>

$(document).ready(function(){

	var count = 0;
	
	function add_input_field(count)
	{

		var html = '';

		html += '<tr>';

		html += '<td><input type="text" name="description[]" class="form-control description" /></td>';
        html += '<td><input type="text" name="type[]" class="form-control type" /></td>';

		
		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove">Remove</button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table').append(add_input_field(0));

	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add', function(){

		count++;

		$('#item_table').append(add_input_field(count));

		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	$('#insert_form').on('submit', function(event){

		event.preventDefault();

		var error = '';

		count = 1;

		$('.description').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Publication description at  Row "+count+"</li>";

			}

			count = count + 1;

		});

        count = 1;

        $('.type').each(function(){

        if($(this).val() == '')
        {

            error += "<li>Enter Type of Publication at  Row "+count+"</li>";

        }

        count = count + 1;

        });

		


		var form_data = $(this).serialize();

		if(error == '')
		{

			$.ajax({

				url:"add_publications_logic.php",

				method:"POST",

				data:form_data,

				beforeSend:function()
	    		{

	    			$('#submit_button').attr('disabled', 'disabled');

	    		},

				success:function(data)
				{

					if(data == 'ok')
					{

						$('#item_table').find('tr:gt(0)').remove();

						$('#error').html('<div class="alert alert-success">Data Successfully Stored in Server</div>');

						$('#item_table').append(add_input_field(0));

						$('.selectpicker').selectpicker('refresh');

						$('#submit_button').attr('disabled', false);
					}

				}
			})

		}
		else
		{
			$('#error').html('<div class="alert alert-danger"><ul>'+error+'</ul></div>');
		}

	});
	 
});
</script>