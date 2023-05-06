@extends('main.headerFooter')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">

                    <form action="{{ route('timetable.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <input class="form-control" id="exampleFormControlTextarea1" type="text" name="description"
                                   placeholder="description">
                            <!-- что  за error? -->
                            @error('description')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="groupIdIndex" class="form-label">Группа</label>
                            <select id="groupIdIndex" class="form-control" name="group_id">
                                    <?php $groups = \App\Models\Group::all(); foreach ($groups as $var => $group): ?>
                                <option value="{{ $group['id'] }}">
                                        <?php echo $group['name'] ?>
                                </option>
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
                                <option value="{{ $subject['id'] }}">
                                        <?php echo $subject['name'] ?>
                                </option>
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
                                <option value="{{ $room['id'] }}">
                                        <?php echo $room['name'] ?>
                                </option>
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
                                <option value="{{ $teacher['id'] }}">
                                        <?php echo $teacher['name'] ?>
                                </option>
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
                                <option value="{{ $date_time_table['id'] }}">
                                        <?php
                                        $date = new DateTimeImmutable($date_time_table['startDate']);
                                        echo $date->format('d.m.Y') . ' - ' . $days[$date->format('N')];
                                        ?>
                                </option>
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
                                <option value="{{ $lesson['id'] }}">
                                        <?php
                                        $dateTime = new DateTimeImmutable($lesson['startTime']);
                                        echo $dateTime->format('H:i') ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            @error('lesson_id')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
