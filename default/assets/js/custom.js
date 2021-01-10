
  $('#csv').on('click',function(){
    $("#example-2").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })
function Export() {
            html2canvas(document.getElementById('example-2'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }