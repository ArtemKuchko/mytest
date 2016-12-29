@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Редактирование возрастной группы</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Проверьте основные данные возрастной группы:
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action=" {{ url('/edit_group') }}" role="form" method="post">

								{{ csrf_field() }}
								
                                <div class="form-group">
                                    <label>Название группы:</label>
                                    <input class="form-control" placeholder="Например, юноши 12-13 лет" name="name" value="{{$group -> name}}">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Минимальный возраст (полных лет):</label>
                                    <input class="form-control" placeholder="Например, 12">
                                </div>
                                <div class="form-group">
                                    <label>Максимальный возраст (полных лет):</label>
                                    <input class="form-control" placeholder="Например, 13">
                                </div>-->
								
								<div class="form-group">
									<label>Выберите пол:</label>
									<div class="radio">
										<label>
											<input type="radio" name="gender" id="optionsRadios1" value="M"
											@if ($group->gender == "M")
												
											checked	
											@endif
											
											>Мужской
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="gender" id="optionsRadios2" value="F"
											@if ($group->gender == "F")
												
											checked	
											@endif
											
											>Женский
										</label>
									</div>
									
                                </div>

                                <button type="submit" class="btn btn-default">Сохранить</button>
                                <!-- <button type="reset" class="btn btn-default">Сбросить</button>-->
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->



@endsection