// Export To PDF
document.getElementById('exportIcon').addEventListener('click', function() {
    const doc = new jsPDF();

    // Get the HTML content of the current page
    const content = document.documentElement.innerHTML;

    // Add the HTML content to the PDF with the style
    doc.html(content, {
    callback: function () {
        // Save the PDF
        doc.save('jumi-doc-export.pdf');
    },
    html2canvas: {
        scale: 2, // Increase the scale for better quality (optional)
        useCORS: true // Enable CORS since jsPDF uses canvas (optional)
    },
    x: 10, // X position of the content in the PDF (optional)
    y: 10, // Y position of the content in the PDF (optional)
    width: 190, // Width of the content in the PDF (optional)
    });
});
