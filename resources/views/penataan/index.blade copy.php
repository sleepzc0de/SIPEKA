<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yajra DataTables with Database</title>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Files</h2>
        <table id="files-table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PIC</th>
                    <th>Approver</th>
                    <th>Validator</th>
                    <th>Konseptor</th>
                    <th>File Dukungan</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#files-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('data.penataan') }}',
                columns: [
                    { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
                    { data: 'pic', name: 'pic' },
                    { data: 'approver', name: 'approver' },
                    { data: 'validator', name: 'validator' },
                    { data: 'konseptor', name: 'konseptor' },
                    { data: 'file_dukungan', name: 'file_dukungan' }
                ]
            });
        });
    </script>
</body>
</html>
