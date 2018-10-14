$(document).ready(function () 
{
    $("#validateDocumentForm").on('submit', function(e)
    {
        console.log('toto');
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
    })
});
