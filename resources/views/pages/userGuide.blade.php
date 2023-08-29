@extends('layouts.app')

@section('main')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h1 class="xl:ml-24">How to Use this app</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="container mx-auto p-8">
    <!-- PDF Viewer Container -->
    <div class="pdf-viewer-container p-2 sm:p-4 md:p-8">
        <!-- This will be populated by JavaScript -->
    </div>
    </div>
    <!-- Include PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

    <!-- JavaScript to render PDF -->
    <script>
        // Path to your PDF file
        const pdfUrl = "{{ asset('pdf/Citi Alert Explanatory.pdf') }}";

        // Initialize PDF.js
        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            // Create a container for each page
            for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                pdf.getPage(pageNumber).then(page => {
                    const canvas = document.createElement("canvas");
                    canvas.className = "pdf-page w-full";
                    const context = canvas.getContext("2d");
                    const viewport = page.getViewport({ scale: 1.0 });

                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Append canvas to the PDF viewer container
                    document.querySelector(".pdf-viewer-container").appendChild(canvas);

                    // Render PDF page to canvas
                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                });
            }
        });
    </script>
@endsection
