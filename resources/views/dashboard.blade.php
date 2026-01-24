@extends("layouts.main")

@section("content")
<div class="flex justify-center">
    <div class="max-w-[998px] px-4 w-full">

        <div class="flex flex-col lg:flex-row gap-3 lg:gap-0 w-full justify-between">
            <div class="w-full lg:w-[30%] lg:pr-[24px]">
                <div class="border-[1px] exe-gray-border rounded-[8px] p-[24px]">
                    <span class="link-box-button">Pridėti pratimų planų</span>
                </div>
            </div>
            <div class="w-full lg:w-[70%]">
                <div>
                    <h3 class="mb-[24px]">Pratimų planai</h3>

                    <div class="exercise-day-holder">
                        @if (empty($exercise_day_plans))
                            @foreach ($exercise_day_plans as $plan)
                                <div class="exercise-day-item">
                                    <div class="flex justify-between">
                                        <h4 class="font-bold">Push 1</h4>
                                        <div>5 pratimai</div>
                                    </div>

                                    <div class="absolute bottom-0 left-0 w-full px-[24px] pb-[24px] flex flex-col-reverse sm:flex-row justify-between items-center">
                                        <div>Atnaujinta: 2026-01-22</div>
                                        <div class="text-[14px] flex gap-2">
                                            <div class="font-bold exe-red-text">Pir</div>
                                            <div class="">Antr</div>
                                            <div class="font-bold exe-red-text">Tr</div>
                                            <div class="">Ket</div>
                                            <div class="font-bold exe-red-text">Pen</div>
                                            <div class="">Šeš</div>
                                            <div class="font-bold exe-red-text">Sek</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div>Planų nėra</div>
                        @endif

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
