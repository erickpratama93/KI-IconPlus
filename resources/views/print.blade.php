<html>

<head>
    <title>{{ $document->surat_pengajuan }}</title>
</head>

<body>
    <embed src="{{ asset($document->path_pengajuan) }}" type="application/pdf" width="100%" height="600px" />
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>
