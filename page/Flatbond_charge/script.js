$(document).ready(function () 
{
	$('#addClaimButton').on('click', function () 
    {
		var category = $("#claimCategory").val();
		var description = $("#claimDescription").val();
		var ammount = $("#claimAmmount").val();
        
        console.log(category)
        console.log(description)
        console.log(ammount)
        
        if(category != "" && description != "" && $.isNumeric((ammount)))
        {
            addClaim(category,description,ammount);
            $("#popUpAddClaim").modal('toggle');
            $("#alertModal").empty();
            $("#alertDiv").empty();
            $("#alertDiv").append("<div class='alert alert-success' role='alert' id='alertSuccess'>Claim added</div>");
        }
        else
        {
            $("#alertModal").empty();
            $("#alertDiv").empty();
            $("#alertModal").append("<div class='alert alert-danger' role='alert' id='alertSuccess'>Error in the form</div>");
        }
	});
});

function addClaim(category,description,ammount)
{
    $("#tableClaim").append(
    "<tr>"+
    "<td>"+category+"</td>"+
    "<td>"+description+"</td>"+
    "<td>"+ammount+"</td>"+
    "<td>created</td>"+
    "<td><button type='button' class='btn btn-secondary'>Remove</button><button type='button' class='btn btn-secondary'>Upload evidence</button></td>"+
    "</tr>");
}