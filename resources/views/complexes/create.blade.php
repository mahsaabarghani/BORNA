
    <div class="container">
        <h1 class="h4 mb-4">ایجاد مجتمع جدید</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
        @endif

        {{-- فرض شده متغیر $people در کنترلر به ویو ارسال شده --}}
        <form action="{{ route('complexes.store') }}" method="POST" class="card p-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">نام مجتمع</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">آدرس</label>
                <textarea id="address" name="address" rows="3"
                          class="form-control" required>{{ old('address') }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="floors" class="form-label">تعداد طبقات</label>
                    <input type="number" id="floors" name="floors" min="1"
                           value="{{ old('floors', 1) }}" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="parking_spaces" class="form-label">جای پارک</label>
                    <input type="number" id="parking_spaces" name="parking_spaces" min="0"
                           value="{{ old('parking_spaces', 0) }}" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="manager_person_id" class="form-label">مدیر (اختیاری)</label>
                <select id="manager_person_id" name="manager_person_id" class="form-select">
                    <option value="">— انتخاب کنید —</option>
                    @foreach ($people as $person)
                        <option value="{{ $person->id }}"
                            {{ old('manager_person_id') == $person->id ? 'selected' : '' }}>
                            {{ $person->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('complexes.index') }}" class="btn btn-link">انصراف</a>
                <button class="btn btn-primary ms-2">ثبت</button>
            </div>
        </form>
    </div>

