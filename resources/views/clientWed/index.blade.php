@extends('layout.master')

@section('content')
    <section class="min-h-screen px-4 py-6 bg-gray-50">

        {{-- ================= PROGRESS BAR ================= --}}
        <div class="relative max-w-5xl p-6 mx-auto bg-white shadow rounded-2xl">
            <div class="relative flex items-center justify-between">

                @foreach ([1 => 'Mempelai Pria', 2 => 'Mempelai Wanita', 3 => 'Detail Acara'] as $i => $label)
                    <div class="z-10 flex flex-col items-center">
                        <div
                            class="flex items-center justify-center w-12 h-12 font-bold text-gray-400 bg-gray-200 rounded-full step-indicator">
                            {{ $i }}
                        </div>
                        <p class="mt-2 text-sm">{{ $label }}</p>
                    </div>
                @endforeach

                <div class="absolute top-6 left-[12%] right-[12%] h-1 bg-gray-200 rounded-full">
                    <div id="progressBar"
                        class="h-1 transition-all duration-500 rounded-full bg-gradient-to-r from-pink-400 to-rose-400"
                        style="width:0%">
                    </div>
                </div>

            </div>
        </div>

        {{-- ================= CONTENT ================= --}}
        <div class="max-w-6xl p-8 mx-auto mt-10 bg-white shadow rounded-2xl md:flex md:gap-8">

            {{-- ================= FORM ================= --}}
            <div class="md:w-2/3">
                <h2 class="mb-6 text-2xl font-bold">Wedding Information</h2>

                <form id="weddingForm" action="{{ route('clientWed.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- ================= STEP 1 ================= --}}
                    <div class="step" data-step="1">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label>Nama Mempelai Pria</label>
                                <input type="text" name="groom" class="input" />
                            </div>
                            <div>
                                <label>Orang Tua</label>
                                <input type="text" name="groomParents" class="input" />
                            </div>
                        </div>
                    </div>

                    {{-- ================= STEP 2 ================= --}}
                    <div class="hidden step" data-step="2">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label>Nama Mempelai Wanita</label>
                                <input type="text" name="bride" class="input" />
                            </div>
                            <div>
                                <label>Orang Tua</label>
                                <input type="text" name="brideParents" class="input" />
                            </div>
                        </div>
                    </div>

                    {{-- ================= STEP 3 ================= --}}
                    <div class="hidden step" data-step="3">
                        <div class="space-y-4">
                            <input type="datetime-local" name="weddingDate" class="input">
                            <input type="text" name="location" placeholder="Lokasi" class="input">
                            <input type="url" name="mapLink" placeholder="Google Map Link" class="input">
                            <textarea name="story" placeholder="Love Story" class="input"></textarea>
                            <input type="text" name="norek" placeholder="Rekening Hadiah" class="input">
                            <input type="file" name="pictwed">
                        </div>
                    </div>

                    {{-- ================= BUTTON ================= --}}
                    <div class="flex justify-between mt-8">
                        <button type="button" id="prevBtn" class="hidden btn">Back</button>
                        <button type="button" id="nextBtn" class="btn-primary">Next</button>
                        <button type="submit" id="submitBtn" class="hidden btn-success">Submit</button>
                    </div>
                </form>
            </div>

            {{-- ================= PREVIEW ================= --}}
            {{-- <div class="hidden md:block md:w-1/3">
                <iframe id="previewFrame" src="{{ route('preview.wedding') }}"
                    class="w-full h-[65vh] border rounded-xl"></iframe>
            </div> --}}
            <div class="hidden w-1/3 md:block">
                <iframe id="previewFrame" src="{{ route('preview.wedding') }}"
                    class="w-full h-[70vh] border border-gray-200 rounded-xl shadow-inner bg-white"></iframe>
            </div>
        </div>
    </section>

    {{-- ================= STYLE ================= --}}
    <style>
        .input {
            width: 100%;
            padding: .6rem;
            border: 1px solid #ddd;
            border-radius: .5rem
        }

        .btn {
            padding: .6rem 1.5rem;
            border: 1px solid #ddd;
            border-radius: .5rem
        }

        .btn-primary {
            background: #ec4899;
            color: white;
            padding: .6rem 1.5rem;
            border-radius: .5rem
        }

        .btn-success {
            background: #22c55e;
            color: white;
            padding: .6rem 1.5rem;
            border-radius: .5rem
        }
    </style>

    {{-- ================= SCRIPT ================= --}}
    @push('scripts')
        <script>
            let currentStep = 1;
            const totalSteps = 3;

            const steps = document.querySelectorAll('.step');
            const indicators = document.querySelectorAll('.step-indicator');
            const progressBar = document.getElementById('progressBar');

            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');

            function showStep(step) {
                steps.forEach(s => s.classList.add('hidden'));
                steps[step - 1].classList.remove('hidden');

                indicators.forEach((el, i) => {
                    el.classList.toggle('bg-pink-400', i < step);
                    el.classList.toggle('text-white', i < step);
                });

                progressBar.style.width = ((step - 1) / (totalSteps - 1)) * 100 + '%';

                prevBtn.classList.toggle('hidden', step === 1);
                nextBtn.classList.toggle('hidden', step === totalSteps);
                submitBtn.classList.toggle('hidden', step !== totalSteps);
            }

            nextBtn.onclick = () => {
                if (currentStep < 3) showStep(++currentStep);
            }
            prevBtn.onclick = () => {
                if (currentStep > 1) showStep(--currentStep);
            }

            showStep(currentStep);

            /* ===== realtime preview ===== */
            const form = document.getElementById('weddingForm');
            const iframe = document.getElementById('previewFrame');

            form.addEventListener('input', () => {
                iframe.contentWindow.postMessage(
                    Object.fromEntries(new FormData(form)), '*'
                );
            });
        </script>
    @endpush
@endsection
