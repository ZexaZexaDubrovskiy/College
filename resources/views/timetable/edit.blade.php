@extends('main.headerFooter')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">

                    <form action="{{ route('timetable.update', $timetable->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <input value="{{ $timetable->description }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="description"
                                   placeholder="description">
                            <!-- что за error? -->
                            @error('description')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="groupIdIndex" class="form-label">Группа</label>
                            <select id="groupIdIndex" class="form-control" name="group_id">
                                    <?php $groups = \App\Models\Group::all(); foreach ($groups as $var => $group): ?>
                                <option value="{{ $group['id'] }}"
                                        <?php
                                    if ($currentGroup['name'] == $group['name']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php echo $group['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('group_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subjectIdIndex" class="form-label">Предмет</label>
                            <select id="subjectIdIndex" class="form-control" name="subject_id">
                                    <?php $subjects = \App\Models\Subject::all(); foreach ($subjects as $var => $subject): ?>
                                <option value="{{ $subject['id'] }}"
                                        <?php
                                    if (\App\Models\Subject::where('id', $timetable->subject_id)->first()['name']
                                        == $subject['name']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php echo $subject['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('subject_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="roomIdIndex" class="form-label">Кабинет</label>
                            <select id="roomIdIndex" class="form-control" name="room_id">
                                    <?php $rooms = \App\Models\Room::all(); foreach ($rooms as $var => $room): ?>
                                <option value="{{ $room['id'] }}"
                                        <?php
                                    if (\App\Models\Room::where('id', $timetable->room_id)->first()['name']
                                        == $room['name']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php echo $room['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('room_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="teacherIdIndex" class="form-label">Преподаватель</label>
                            <select id="teacherIdIndex" class="form-control" name="teacher_id">
                                    <?php $teachers = \App\Models\Teacher::all(); foreach ($teachers as $var => $teacher): ?>
                                <option value="{{ $teacher['id'] }}"
                                        <?php
                                    if (\App\Models\Teacher::where('id', $timetable->teacher_id)->first()['name']
                                        == $teacher['name']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php echo $teacher['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('teacher_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date_time_tableIdIndex" class="form-label">Дата</label>
                            <select id="date_time_tableIdIndex" class="form-control" name="date_time_table_id">
                                    <?php $date_time_tables = \App\Models\DateTimeTable::all();
                                    $days = array(1 => "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье");
                                foreach ($date_time_tables as $var => $date_time_table): ?>
                                <option value="{{ $date_time_table['id'] }}"
                                        <?php
                                    if (\App\Models\DateTimeTable::where('id', $timetable->date_time_table_id)->first()['startDate']
                                        == $date_time_table['startDate']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php
                                     $date = new DateTimeImmutable($date_time_table['startDate']);
                                     echo $date->format('d.m.Y') . ' - ' . $days[$date->format('N')];

                                     ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('date_time_table_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="lessonIdIndex" class="form-label">Начало</label>
                            <select id="lessonIdIndex" class="form-control" name="lesson_id">
                                    <?php $lessons = \App\Models\Lesson::all(); foreach ($lessons as $var => $lesson): ?>
                                <option value="{{ $lesson['id'] }}"
                                        <?php
                                    if (\App\Models\Lesson::where('id', $timetable->lesson_id)->first()['startTime']
                                        == $lesson['startTime']) {
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                ><?php
                                     $dateTime = new DateTimeImmutable($lesson['startTime']);
                                     echo $dateTime->format('H:i') ?></option>
                                <?php endforeach; ?>
                            </select>
                            @error('lesson_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>


                        <div class="col-auto mb-3">
                            <form action="{{ route('timetable.delete', $timetable->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>


                        <div class="col-auto">

                            <button type="submit" class="btn btn-primary mb-3">Обновить</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
