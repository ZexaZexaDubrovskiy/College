@extends('main.headerFooter')
@section('content')

    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">


                <div class="header-section text-center">
                    <h3>Расписание</h3>
                </div>




                    <div class="header-section text-left">
                        <b>Группа: </b>
                        <select id="valueGroup" onchange="window.location.href = this.options[this.selectedIndex].value" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <?php $groups = \App\Models\Group::all(); foreach( $groups as $var => $group ): ?>
                            <option value="{{ route('timetable.show', $group['id']) }}" selected="selected"><?php echo $group['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                </div>
            </div>
        </section>
    </div>

@endsection
