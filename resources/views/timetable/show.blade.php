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
                        <select id="valueGroup" onchange="window.location.href = this.options[this.selectedIndex].value"
                                class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <?php $groups = \App\Models\Group::all(); foreach ($groups as $var => $group): ?>
                            <option

                                    <?php
                                if ($currentGroup['name'] == $group['name']) {
                                    echo 'selected="selected"';
                                }
                                ?>
                            value="{{ route('timetable.show', $group['id']) }}"><?php echo $group['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <table>
                        <div class="row">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 25%;">Время</th>
                                <th scope="col" style="width: 25%;">Дисциплина</th>
                                <th scope="col" style="width: 25%;">Преподаватель</th>
                                <th scope="col" style="width: 25%;">Каб.</th>
                                <th scope="col" style="width: 25%; ">Примечание</th>
                                <th scope="col" style="width: 25%; ">изменить</th>
                            </tr>
                            </thead>

                        <?php

                        for ($j = 1; $j <= 50; $j++) {
                            for ($i = 0; $i < 50; $i++) {
                                if ($i + 1 < count($timetables) &&
                                    \App\Models\DateTimeTable::where('id', '=', $timetables[$i]['date_time_table_id'])->first()['startDate']
                                    >
                                    \App\Models\DateTimeTable::where('id', '=', $timetables[$i + 1]['date_time_table_id'])->first()['startDate']) {
                                    $buf = $timetables[$i + 1];
                                    $timetables[$i + 1] = $timetables[$i];
                                    $timetables[$i] = $buf;
                                }
                            }
                        }


                        $days = array( 1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье" );
                        $currentData = null;
                        foreach ($timetables as $timetable) {

                            if (\App\Models\Group::where('id', '=', $timetable->group_id)->first()['name'] == $currentGroup['name']) {
                                if ($currentData != \App\Models\DateTimeTable::where('id', '=', $timetable->date_time_table_id)->first()['startDate']) {
                                    $date = new DateTimeImmutable(\App\Models\DateTimeTable::where('id', '=', $timetable->date_time_table_id)->first()['startDate']);
                                    echo '
                                    <tr >
                                    <th >
                                         ' . $date->format('d.m.Y') .' - ' . $days[$date->format('N')] . '
                                    </th>
                                </tr>';
                                    $currentData = \App\Models\DateTimeTable::where('id', '=', $timetable->date_time_table_id)->first()['startDate'];
                                }
                                $dateTime = new DateTimeImmutable(\App\Models\Lesson::where('id', '=', $timetable->lesson_id)->first()['startTime']);
                                $myData = array('timetableId' => $timetable->id, 'currentGroupId' => $currentGroup['id']);
                                echo
                                    '<tr style="background: #c4d5e4;">
                                <td scope="row"> ' . $dateTime->format('h:i') . '</td>
                                <td>' . \App\Models\Subject::where('id', '=', $timetable->subject_id)->first()['name'] . '</td>
                                <td>' . \App\Models\Teacher::where('id', '=', $timetable->teacher_id)->first()['name'] . '</td>
                                <td>' . \App\Models\Room::where('id', '=', $timetable->room_id)->first()['name'] . '</td>
                                <td>' . $timetable->description . '</td>
                                <td> <a style="color: #09458d" href="'. route('timetable.edit', [$timetable->id, $currentGroup['id']]) .'">изменить</a> </td>

                            </tr>
                            ';
                            }
                        }
                        ?>
                    </table>
                    <a href="{{ route('timetable.create') }}" class="btn btn-primary mt-5">добавить урок(администратор)</a>
                </div>
            </div>
        </section>
    </div>

@endsection
