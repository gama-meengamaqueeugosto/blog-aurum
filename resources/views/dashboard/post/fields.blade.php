<div class="form-group">
    <label for="title" class="control-label col-sm-2">Título</label>

    <div class="col-sm-8">
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" maxlength="255" required>
    </div><!-- .col-sm-8 -->
</div><!-- .form-group -->

<div class="form-group">
    <label for="short_description" class="control-label col-sm-2">Descrição curta (pág. home)</label>

    <div class="col-sm-8">
        <textarea style="width: 100%;" rows="3" name="short_description" id="short_description" required>{!! $post->short_description !!}</textarea>
    </div><!-- .col-sm-8 -->
</div><!-- .form-group -->

<div class="form-group">
    <label for="description" class="control-label col-sm-2">Conteúdo</label>
    
    <div class="col-sm-8">
        <textarea style="width: 100%;" rows="15" name="description" id="description" required>{!! $post->description !!}</textarea>
    </div><!-- .col-sm-8 -->
</div><!-- .form-group -->

<div class="form-group">
    <label for="author" class="control-label col-sm-2">Autor</label>

    <div class="col-sm-8">
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}" maxlength="255" required>
    </div><!-- .col-sm-8 -->
</div><!-- .form-group -->

<div class="form-group">
    <label for="image" class="control-label col-sm-2">Imagem</label>

    <div class="col-sm-4">
        <div class="input-group">
            <input type="file" accept="image/*" name="image" id="image" class="form-control">
        </div>
    </div><!-- .col-sm-8 -->
</div><!-- .form-group -->