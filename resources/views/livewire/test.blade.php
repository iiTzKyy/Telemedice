<div>
    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
    <div class="card row">
        <div class="card-header px-auto py-auto">
            Form Pengecekan
        </div>
        <div id="step1" class="needs-validation center" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
            <button class="btn btn-primary my-4 mx-4" wire:click="firstStepSubmit" type="button">Lakukan Test Sekarang ?</button>
        </div>

        {{-- Step 1 --}}
        <div id="step2" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
        <label for="riwayat" class="form-label mb-2">Riwayat Perjalanan <strong>Sebulan Terakhir</strong></label>
        <input type="text" wire:model="riwayat" class="form-control {{$errors->first('riwayat') ? "is-invalid" : "" }}" id="riwayat" aria-describedby="riwayat">

        <label for="Kontak Fisik" class="form-label mb-2">Apakah Pernah Melakukan Kontak Fisik Dengan <strong>Pasien Positif ?</strong></label>
        <input type="text" wire:model="fisik" class="form-control {{$errors->first('fisik') ? "is-invalid" : "" }}" id="fisik" aria-describedby="fisik">

        <label for="Keluarga" class="form-label mb-2">Apakah Terdapat Keluarga Yang <strong>Terindikasi Positif ?</strong></label>
        <input type="text" wire:model="keluarga" class="form-control {{$errors->first('keluarga') ? "is-invalid" : "" }}" id="keluarga" aria-describedby="keluarga">
            @error('batuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <button class="btn btn-primary my-4 mx-4" wire:click="secondStepSubmit" type="button">Next</button>
        </div>

        {{-- Step 2 --}}
        <div id="step3" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
                <label for="name" class="form-label">Seberapa Parah <strong>Batuk</strong> Yang Anda Alami ?</label>
                <div class="col-sm-9">
                    <select name="batuk" id="batuk" class="form-control" wire:model="batuk" aria-placeholder="Pilih Kondisi">
                        <option value="1">Batuk Ringan</option>
                        <option value="2">Batuk Kering</option>
                        <option value="3">Batuk Berdahak</option>
                        <option value="4">Batuk Parah</option>
                    </select>
                </div>
                @error('batuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(2)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="thirdStepSubmit">Next</button>
        </div>

        {{-- Step 3 --}}
        <div id="step4" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 4 ? 'none' : '' }}">
           <div class="mb-3 mx-4">
                <label for="demam" class="form-label">Seberapa Parah <strong>Demam</strong> Yang Anda Alami ?</label>
                <div class="col-sm-9">
                    <select name="demam" id="demam" class="form-control" wire:model="demam">
                        <option value="1">Tidak Enak Badan</option>
                        <option value="2">Panas Dingin</option>
                        <option value="3">Menggigil</option>
                        <option value="4">Temperatur Lebih Dari 37.2 Derajat Celcius</option>
                    </select>
                </div>
                @error('demam')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(3)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="fourthStepSubmit">Next</button>
        </div>

        {{-- Step 4 --}}
        <div id="step5" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 5 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
                <label for="sesak" class="form-label">Bagaimana Kondisi <strong>Irama Nafas</strong> (Per Menit) Anda Saat Ini ?</label>
                <div class="col-sm-9">
                    <select name="sesak" id="sesak" class="form-control" wire:model="sesak">
                        <option value="1">20-24</option>
                        <option value="2">25-29</option>
                        <option value="3">30-34</option>
                        <option value="4">35-39</option>
                    </select>
                </div>
                @error('sesak')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(4)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="fifthStepSubmit">Next</button>
        </div>

        {{-- Step 5 --}}
        <div id="step6" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 6 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
                <label for="kepala" class="form-label">Dari Skala 1 - 5 Seberapa Parah <strong>Sakit Kepala</strong> Yang Anda Alami ?</label>
                <input type="number" wire:model="kepala" class="form-control {{$errors->first('kepala') ? "is-invalid" : "" }}" id="kepala" aria-describedby="kepala" min="1" max="5">
                @error('sesak')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(5)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="sixthStepSubmit">Next</button>
        </div>

        <div id="step7" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 7 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
            <label for="nyeri" class="form-label"><strong>Kondisi Tenggorokan</strong> Saat Ini ?</label>
            <div class="col-sm-9">
                    <select name="tenggorokan" id="tenggorokan" class="form-control" wire:model="tenggorokan">
                        <option value="1">Nyeri Telan</option>
                        <option value="3">Rasa Terbakar</option>
                        <option value="5">Tidak Bisa Menelan</option>
                    </select>
                </div>
                @error('tenggorokan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(6)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="seventhStepSubmit">Next</button>
        </div>

        <div id="step8" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 8 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
                <label for="nyeri" class="form-label">Frekuensi <strong>Irama Jantung</strong> Yang Anda Alami ?</label>
                <select name="nyeri" id="nyeri" class="form-control" wire:model="nyeri" >
                        <option value="1">Dibawah 120</option>
                        <option value="2">120</option>
                        <option value="3">Diatas 120</option>
                    </select>
                @error('nyeri')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(7)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="eighthStepSubmit">Next</button>
        </div>

        <div id="step9" class="needs-validation px-3 py-3" style="display: {{ $currentStep != 9 ? 'none' : '' }}">
            <div class="mb-3 mx-4">
                <label for="saturasi" class="form-label">Berapa Angka Saturasi Oksigen Anda ?</label>
                <input type="number" wire:model="saturasi" class="form-control {{$errors->first('saturasi') ? "is-invalid" : "" }}" id="saturasi" min="1" max="200">
                @error('saturasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(8)">Back</button>
            <button class="btn btn-primary my-1" type="button" wire:click="ninthStepSubmit">Next</button>
        </div>

        <div id="step10" class="px-3 py-3" style="display: {{ $currentStep != 10 ? 'none' : '' }}">
            <ul class="list-group list-group-flush mx-4" >
                <li class="list-group-item"><strong>Batuk</strong> : <label for="batuk" class="form-control col-lg-2">{{$batuk}}</label></li>
                <li class="list-group-item"><strong>Demam</strong> : <label for="batuk" class="form-control col-lg-2">{{ $demam }}</label></li>
                <li class="list-group-item"><strong>Sesak</strong> : <label for="batuk" class="form-control col-lg-2">{{ $sesak }}</label></li>
                <li class="list-group-item"><strong>Sakit Kepala</strong> : <label for="batuk" class="form-control col-lg-2">{{ $kepala }}</label></li>
                <li class="list-group-item"><strong>Sakit Tenggorokan</strong> : <label for="batuk" class="form-control col-lg-2">{{ $tenggorokan }}</label></li>
                <li class="list-group-item"><strong>Pegal Pegal / Nyeri Badan</strong> : <label for="batuk" class="form-control col-lg-2">{{ $nyeri }}</label></li>
                <li class="list-group-item"><strong>Saturasi</strong> : <label for="batuk" class="form-control col-lg-2">{{ $saturasi }}</label></li>
            </ul>
            <button class="btn btn-danger my-4 mx-4" type="button" wire:click="back(9)">Back</button>
            <button class="btn btn-success my-4" wire:click="submitForm" type="button">Finish</button>
        </div>

        <div id="step11" class="px-3 py-3" style="display: {{ $currentStep != 11 ? 'none' : '' }}">
            <div class="alert alert-success">
                {{ $succesMessage }}
            </div>
            <div> Terima Kasih Telah Mengisi Form</div>
            <button class="btn btn-success mx-4 my-4" wire:click="tenStepSubmit" type="button">Kembali</button>
        </div>
    </div>
</div>