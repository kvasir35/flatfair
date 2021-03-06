$(document).ready(function () 
{
    $("#flatbondsPage").addClass("active");
    $("#validateDocumentForm").on('submit', function(e)
    {
        valid = true;
        if ($('#signedAgreementFile').get(0).files.length === 0) 
        {
            valid = false;
        }
        
        if ($('#checkInReportFile').get(0).files.length === 0) 
        {
            valid = false;
        }
        
        if ($('#checkOutReportFile').get(0).files.length === 0) 
        {
            console.log("No files selected.");
        }
        
        if(!valid)
        {
            e.preventDefault();
            $("#alertDiv").append("<div class='alert alert-danger' role='alert' id='alertSuccess'>All the document need to be fill</div>");
        }
        else
        {
            // e.preventDefault();
            setCookie("document",true);
        }
    })
});
