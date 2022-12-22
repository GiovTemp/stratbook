<div>

    Nome Abilità <input type="text" wire:model.lazy="name" placeholder="es: Jammer">
    @error('name') {{$message}} @enderror <br>
    
    Descrizione <input type="string" wire:model.lazy="description">
    @error('description') {{$message}} @enderror <br>

    Quantità (se necessaria) <input type="number" wire:model.lazy="uses"> 
    @error('uses') {{$message}} @enderror
    <br>
    <div class="mb-3">
        <input  wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
          @error('temporary_images.*')
            {{$message}}
          @enderror 
      </div>
    <p>Photo preview:</p>

    <div class="container">
      <div class="row">
        @if (!empty($oldImages))
          @foreach ($oldImages as $image )
            <div class="col-3">
              <img src="{{url('storage/'.$image->path)}}" class="img-fluid" alt="">
              <button type="button" class="btn btn-danger shadow d-bloc text-center mt-2 mx-auto" wire:click="removeOldImage({{$loop->index}})">Cancella</button>  
            </div>
        @endforeach
        @endif

        @if (!empty($images))
          @foreach ($images as $key=>$image )
            <div class="col-3">
              <img src="{{$image->temporaryUrl()}}" class="img-fluid" alt="">
              <button type="button" class="btn btn-danger shadow d-bloc text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>  

            </div>
          @endforeach
        @endif

      </div>
    </div>

    <button wire:click="save">Invia</button>

</div>