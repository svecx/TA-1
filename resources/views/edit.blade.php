@extends('layouts.app')

@section('content')
<div class="navigasi" style="margin-top:50px">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="position:fixed">
            <a class="nav-link" id="v-pills-home-tab" href="{{ route('home') }}" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" href="{{ route('input-dokumen') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Input Dokumen</a>
            <a class="nav-link active" id="v-pills-messages-tab" href="{{ route('list-dokumen') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">List Dokumen</a>
           
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h3 class="judul">EDIT DOKUMEN</h3>
                <form action="{{ route('dokumen.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    
                    <div>
                        <label class="form-label">Judul Dokumen:</label>
                        <input class="form-control" name="judul_dokumen" value="{{ $document->judul_dokumen }}" style="margin-left:200px">
                    </div>
                    <div>
                        <label class="form-label">Deskripsi Dokumen:</label>
                        <input class="form-control" name="deskripsi_dokumen" value="{{ $document->deskripsi_dokumen }}" style="margin-left:200px">
                    </div>
                    <div style="margin-left:200px; margin-top:10px">
                        <label>Kategori Dokumen:</label>
                        <select name="kategori_dokumen" class="form-control">
                            <option value="jurusan" {{ $document->kategori_dokumen == 'jurusan' ? 'selected' : '' }}>Jurusan</option>
                            <option value="prodi" {{ $document->kategori_dokumen == 'prodi' ? 'selected' : '' }}>Program Studi</option>
                            <option value="umum" {{ $document->kategori_dokumen == 'umum' ? 'selected' : '' }}>Umum</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleDate" class="form-label">Tanggal Dokumen:</label>
                        <input type="date" class="form-control" name="tanggal_dokumen" id="exampleDate" value="{{ $document->tanggal_dokumen }}" style="margin-left:200px">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File Dokumen:</label>
                        <input class="form-control" type="file" id="editFile" name="edit_dokumen_file" style="margin-left:200px">
                    </div>

                    <div class="form-label">
                        <div>
                            <label for="tags">Tags:</label>
                            <input type="text" id="tags" name="tags" data-role="tagsinput" class="form-control" value="{{ $document->tags }}" placeholder="Add tags">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="margin-left:200px">Update</button>
                    <a href="{{ route('list-dokumen') }}" class="btn btn-secondary" style="margin-left:10px">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
