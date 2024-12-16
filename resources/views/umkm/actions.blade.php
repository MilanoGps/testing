<div class="d-flex">

    <button type="button" class="btn btn-outline-dark btn-sm me-2" data-bs-toggle="modal"
        data-bs-target="#showData{{ $umkm->id }}">
        <i class="bi-person-lines-fill"></i>
    </button>

    <button type="button" class="btn btn-outline-dark btn-sm me-2" data-bs-toggle="modal"
        data-bs-target="#editData{{ $umkm->id }}">
        <i class="bi-pencil-square"></i>
    </button>

    <form action="{{ route('umkm.destroy', ['umkm' => $umkm->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete">
            <i class="bi-trash"></i>
        </button>
    </form>

</div>
</div>
