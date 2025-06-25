<div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h4">فهرست مجتمع‌های تجاری</h1>
            <a href="{{ route('complexes.create') }}" class="btn btn-primary">
                ایجاد مجتمع جدید +
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($complexes->count())
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>طبقات</th>
                    <th>جای پارک</th>
                    <th>مدیر</th>
                    <th class="w-25">آدرس</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($complexes as $complex)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $complex->name }}</td>
                        <td>{{ $complex->floors }}</td>
                        <td>{{ $complex->parking_spaces }}</td>
                        <td>{{ $complex->manager?->name ?? '—' }}</td>
                        <td>{{ $complex->address }}</td>
                        <td>
                            <a href="{{ route('complexes.edit', $complex) }}"
                               class="btn btn-sm btn-outline-secondary">ویرایش</a>

                            <form action="{{ route('complexes.destroy', $complex) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('حذف شود؟');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>هنوز هیچ مجتمعی ثبت نشده است.</p>
        @endif
    </div>
