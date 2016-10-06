/**
 * These @method comments were generated automatically. Do not edit!
 */

/**
 * @method static void system(string $cmd_format, array $options = []) 
 *     Run an external command.
 * @method Image relational(Image $right,  $relational, array $options = []) 
 *     Relational operation on two images.
 * @method Image boolean(Image $right,  $boolean, array $options = []) 
 *     Boolean operation on two images.
 * @method Image math2(Image $right,  $math2, array $options = []) 
 *     Binary math operations.
 * @method Image complex2(Image $right,  $cmplx, array $options = []) 
 *     Complex binary operations on two images.
 * @method Image complexform(Image $right, array $options = []) 
 *     Form a complex image from two real images.
 * @method static Image sum(array $in, array $options = []) 
 *     Sum an array of images.
 * @method Image invert(array $options = []) Invert an image.
 * @method Image linear(array $a, array $b, array $options = []) 
 *     Calculate (a * in + b).
 * @method Image math( $math, array $options = []) 
 *     Apply a math operation to an image.
 * @method Image abs(array $options = []) Absolute value of an image.
 * @method Image sign(array $options = []) Unit vector of pixel.
 * @method Image round( $round, array $options = []) 
 *     Perform a round function on an image.
 * @method Image relational_const(array $c,  $relational, array $options = []) 
 *     Relational operations against a constant.
 * @method Image remainder_const(array $c, array $options = []) 
 *     Remainder after integer division of an image and a constant.
 * @method Image boolean_const(array $c,  $boolean, array $options = []) 
 *     Boolean operations against a constant.
 * @method Image math2_const(array $c,  $math2, array $options = []) 
 *     Pow( @in, @c ).
 * @method Image complex( $cmplx, array $options = []) 
 *     Perform a complex operation on an image.
 * @method Image complexget( $get, array $options = []) 
 *     Get a component from a complex image.
 * @method float avg(array $options = []) Find image average.
 * @method float min(array $options = []) Find image minimum.
 * @method float max(array $options = []) Find image maximum.
 * @method float deviate(array $options = []) Find image standard deviation.
 * @method Image stats(array $options = []) Find image average.
 * @method Image hist_find(array $options = []) Find image histogram.
 * @method Image hist_find_ndim(array $options = []) 
 *     Find n-dimensional image histogram.
 * @method Image hist_find_indexed(Image $index, array $options = []) 
 *     Find indexed image histogram.
 * @method Image hough_line(array $options = []) Find hough line transform.
 * @method Image hough_circle(array $options = []) Find hough circle transform.
 * @method array(Image, ImageImage, Image) project(array $options = []) 
 *     Find image projections.
 * @method array(Image, ImageImage, Image) profile(array $options = []) 
 *     Find image profiles.
 * @method Image measure(integer $h, integer $v, array $options = []) 
 *     Measure a set of patches on a colour chart.
 * @method array getpoint(integer $x, integer $y, array $options = []) 
 *     Read a point from an image.
 * @method Image copy(array $options = []) Copy an image.
 * @method Image tilecache(array $options = []) 
 *     Cache an image as a set of tiles.
 * @method Image linecache(array $options = []) 
 *     Cache an image as a set of lines.
 * @method Image sequential(array $options = []) Check sequential access.
 * @method Image cache(array $options = []) Cache an image.
 * @method Image embed(integer $x, integer $y, integer $width, 
 *     integer $height, array $options = []) Embed an image in a larger image.
 * @method Image flip( $direction, array $options = []) Flip an image.
 * @method Image insert(Image $sub, integer $x, integer $y, 
 *     array $options = []) Insert image @sub into @main at @x, @y.
 * @method Image join(Image $in2,  $direction, array $options = []) 
 *     Join a pair of images.
 * @method static Image arrayjoin(array $in, array $options = []) 
 *     Join an array of images.
 * @method Image extract_area(integer $left, integer $top, integer $width, 
 *     integer $height, array $options = []) Extract an area from an image.
 * @method Image extract_area(integer $left, integer $top, integer $width, 
 *     integer $height, array $options = []) Extract an area from an image.
 * @method Image extract_band(integer $band, array $options = []) 
 *     Extract band from an image.
 * @method Image bandjoin_const(array $c, array $options = []) 
 *     Append a constant band to an image.
 * @method Image bandmean(array $options = []) Band-wise average.
 * @method Image bandbool( $boolean, array $options = []) 
 *     Boolean operation across image bands.
 * @method Image replicate(integer $across, integer $down, 
 *     array $options = []) Replicate an image.
 * @method Image cast( $format, array $options = []) Cast an image.
 * @method Image rot( $angle, array $options = []) Rotate an image.
 * @method Image rot45(array $options = []) Rotate an image.
 * @method Image autorot(array $options = []) Autorotate image by exif tag.
 * @method Image recomb(Image $m, array $options = []) 
 *     Linear recombination with matrix.
 * @method Image bandfold(array $options = []) Fold up x axis into bands.
 * @method Image bandunfold(array $options = []) 
 *     Unfold image bands into x axis.
 * @method Image flatten(array $options = []) Flatten alpha out of an image.
 * @method Image premultiply(array $options = []) Premultiply image alpha.
 * @method Image unpremultiply(array $options = []) Unpremultiply image alpha.
 * @method Image grid(integer $tile_height, integer $across, integer $down, 
 *     array $options = []) Grid an image.
 * @method Image scale(array $options = []) Scale an image to uchar.
 * @method Image wrap(array $options = []) Wrap image origin.
 * @method Image zoom(integer $xfac, integer $yfac, array $options = []) 
 *     Zoom an image.
 * @method Image subsample(integer $xfac, integer $yfac, array $options = []) 
 *     Subsample an image.
 * @method Image msb(array $options = []) 
 *     Pick most-significant byte from an image.
 * @method Image byteswap(array $options = []) Byteswap an image.
 * @method Image falsecolour(array $options = []) False-colour an image.
 * @method Image gamma(array $options = []) Gamma an image.
 * @method static Image black(integer $width, integer $height, 
 *     array $options = []) Make a black image.
 * @method static Image gaussnoise(integer $width, integer $height, 
 *     array $options = []) Make a gaussnoise image.
 * @method static Image text(string $text, array $options = []) 
 *     Make a text image.
 * @method static Image xyz(integer $width, integer $height, 
 *     array $options = []) Make an image where pixel values are coordinates.
 * @method static Image gaussmat(float $sigma, float $min_ampl, 
 *     array $options = []) Make a gaussian image.
 * @method static Image logmat(float $sigma, float $min_ampl, 
 *     array $options = []) Make a laplacian of gaussian image.
 * @method static Image eye(integer $width, integer $height, 
 *     array $options = []) Make an image showing the eye's spatial response.
 * @method static Image grey(integer $width, integer $height, 
 *     array $options = []) Make a grey ramp image.
 * @method static Image zone(integer $width, integer $height, 
 *     array $options = []) Make a zone plate.
 * @method static Image sines(integer $width, integer $height, 
 *     array $options = []) Make a 2d sine wave.
 * @method static Image mask_ideal(integer $width, integer $height, 
 *     float $frequency_cutoff, array $options = []) Make an ideal filter.
 * @method static Image mask_ideal_ring(integer $width, integer $height, 
 *     float $frequency_cutoff, float $ringwidth, array $options = []) 
 *     Make an ideal ring filter.
 * @method static Image mask_ideal_band(integer $width, integer $height, 
 *     float $frequency_cutoff_x, float $frequency_cutoff_y, float $radius, 
 *     array $options = []) Make an ideal band filter.
 * @method static Image mask_butterworth(integer $width, integer $height, 
 *     float $order, float $frequency_cutoff, float $amplitude_cutoff, 
 *     array $options = []) Make a butterworth filter.
 * @method static Image mask_butterworth_ring(integer $width, integer $height, 
 *     float $order, float $frequency_cutoff, float $amplitude_cutoff, 
 *     float $ringwidth, array $options = []) Make a butterworth ring filter.
 * @method static Image mask_butterworth_band(integer $width, integer $height, 
 *     float $order, float $frequency_cutoff_x, float $frequency_cutoff_y, 
 *     float $radius, float $amplitude_cutoff, array $options = []) 
 *     Make a butterworth_band filter.
 * @method static Image mask_gaussian(integer $width, integer $height, 
 *     float $frequency_cutoff, float $amplitude_cutoff, array $options = []) 
 *     Make a gaussian filter.
 * @method static Image mask_gaussian_ring(integer $width, integer $height, 
 *     float $frequency_cutoff, float $amplitude_cutoff, float $ringwidth, 
 *     array $options = []) Make a gaussian ring filter.
 * @method static Image mask_gaussian_band(integer $width, integer $height, 
 *     float $frequency_cutoff_x, float $frequency_cutoff_y, float $radius, 
 *     float $amplitude_cutoff, array $options = []) Make a gaussian filter.
 * @method static Image mask_fractal(integer $width, integer $height, 
 *     float $fractal_dimension, array $options = []) Make fractal filter.
 * @method Image buildlut(array $options = []) Build a look-up table.
 * @method Image invertlut(array $options = []) 
 *     Build an inverted look-up table.
 * @method static Image tonelut(array $options = []) Build a look-up table.
 * @method static Image identity(array $options = []) 
 *     Make a 1d image where pixel values are indexes.
 * @method static Image fractsurf(integer $width, integer $height, 
 *     float $fractal_dimension, array $options = []) Make a fractal surface.
 * @method static Image worley(integer $width, integer $height, 
 *     array $options = []) Make a worley noise image.
 * @method static Image perlin(integer $width, integer $height, 
 *     array $options = []) Make a perlin noise image.
 * @method static Image csvload(string $filename, array $options = []) 
 *     Load csv from file.
 * @method static Image matrixload(string $filename, array $options = []) 
 *     Load matrix from file.
 * @method static Image rawload(string $filename, integer $width, 
 *     integer $height, integer $bands, array $options = []) 
 *     Load raw data from a file.
 * @method static Image vipsload(string $filename, array $options = []) 
 *     Load vips from file.
 * @method static Image analyzeload(string $filename, array $options = []) 
 *     Load an analyze6 image.
 * @method static Image ppmload(string $filename, array $options = []) 
 *     Load ppm from file.
 * @method static Image radload(string $filename, array $options = []) 
 *     Load a radiance image from a file.
 * @method static Image pdfload(string $filename, array $options = []) 
 *     Load pdf with libpoppler.
 * @method static Image pdfload_buffer( $buffer, array $options = []) 
 *     Load pdf with libpoppler.
 * @method static Image svgload(string $filename, array $options = []) 
 *     Load svg with rsvg.
 * @method static Image svgload_buffer( $buffer, array $options = []) 
 *     Load svg with rsvg.
 * @method static Image gifload(string $filename, array $options = []) 
 *     Load gif with giflib.
 * @method static Image gifload_buffer( $buffer, array $options = []) 
 *     Load gif with giflib.
 * @method static Image pngload(string $filename, array $options = []) 
 *     Load png from file.
 * @method static Image pngload_buffer( $buffer, array $options = []) 
 *     Load png from buffer.
 * @method static Image matload(string $filename, array $options = []) 
 *     Load mat from file.
 * @method static Image jpegload(string $filename, array $options = []) 
 *     Load jpeg from file.
 * @method static Image jpegload_buffer( $buffer, array $options = []) 
 *     Load jpeg from buffer.
 * @method static Image webpload(string $filename, array $options = []) 
 *     Load webp from file.
 * @method static Image webpload_buffer( $buffer, array $options = []) 
 *     Load webp from buffer.
 * @method static Image flifload(string $filename, array $options = []) 
 *     Load flif with fliflib.
 * @method static Image tiffload(string $filename, array $options = []) 
 *     Load tiff from file.
 * @method static Image tiffload_buffer( $buffer, array $options = []) 
 *     Load tiff from buffer.
 * @method static Image openslideload(string $filename, array $options = []) 
 *     Load file with openslide.
 * @method static Image magickload(string $filename, array $options = []) 
 *     Load file with imagemagick7.
 * @method static Image magickload_buffer( $buffer, array $options = []) 
 *     Load buffer with imagemagick7.
 * @method static Image fitsload(string $filename, array $options = []) 
 *     Load a fits image.
 * @method static Image openexrload(string $filename, array $options = []) 
 *     Load an openexr image.
 * @method void csvsave(string $filename, array $options = []) 
 *     Save image to csv file.
 * @method void matrixsave(string $filename, array $options = []) 
 *     Save image to matrix file.
 * @method void matrixprint(array $options = []) Print matrix.
 * @method void rawsave(string $filename, array $options = []) 
 *     Save image to raw file.
 * @method void rawsave_fd(integer $fd, array $options = []) 
 *     Write raw image to file descriptor.
 * @method void vipssave(string $filename, array $options = []) 
 *     Save image to vips file.
 * @method void ppmsave(string $filename, array $options = []) 
 *     Save image to ppm file.
 * @method void radsave(string $filename, array $options = []) 
 *     Save image to radiance file.
 * @method  radsave_buffer(array $options = []) Save image to radiance buffer.
 * @method void dzsave(string $filename, array $options = []) 
 *     Save image to deep zoom format.
 * @method void pngsave(string $filename, array $options = []) 
 *     Save image to png file.
 * @method  pngsave_buffer(array $options = []) Save image to png buffer.
 * @method void jpegsave(string $filename, array $options = []) 
 *     Save image to jpeg file.
 * @method  jpegsave_buffer(array $options = []) Save image to jpeg buffer.
 * @method void jpegsave_mime(array $options = []) Save image to jpeg mime.
 * @method void webpsave(string $filename, array $options = []) 
 *     Save image to webp file.
 * @method  webpsave_buffer(array $options = []) Save image to webp buffer.
 * @method void flifsave(string $filename, array $options = []) 
 *     Save image to flif file.
 * @method void tiffsave(string $filename, array $options = []) 
 *     Save image to tiff file.
 * @method void fitssave(string $filename, array $options = []) 
 *     Save image to fits file.
 * @method Image mapim(Image $index, array $options = []) 
 *     Resample with an mapim image.
 * @method Image shrink(float $hshrink, float $vshrink, array $options = []) 
 *     Shrink an image.
 * @method Image shrinkh(integer $hshrink, array $options = []) 
 *     Shrink an image horizontally.
 * @method Image shrinkv(integer $vshrink, array $options = []) 
 *     Shrink an image vertically.
 * @method Image reduceh(float $hshrink, array $options = []) 
 *     Shrink an image horizontally.
 * @method Image reducev(float $vshrink, array $options = []) 
 *     Shrink an image vertically.
 * @method Image reduce(float $hshrink, float $vshrink, array $options = []) 
 *     Reduce an image.
 * @method Image quadratic(Image $coeff, array $options = []) 
 *     Resample an image with a quadratic transform.
 * @method Image affine(array $matrix, array $options = []) 
 *     Affine transform of an image.
 * @method Image similarity(array $options = []) 
 *     Similarity transform of an image.
 * @method Image resize(float $scale, array $options = []) Resize an image.
 * @method Image colourspace( $space, array $options = []) 
 *     Convert to a new colourspace.
 * @method Image Lab2XYZ(array $options = []) Transform cielab to xyz.
 * @method Image XYZ2Lab(array $options = []) Transform xyz to lab.
 * @method Image Lab2LCh(array $options = []) Transform lab to lch.
 * @method Image LCh2Lab(array $options = []) Transform lch to lab.
 * @method Image LCh2CMC(array $options = []) Transform lch to cmc.
 * @method Image CMC2LCh(array $options = []) Transform lch to cmc.
 * @method Image XYZ2Yxy(array $options = []) Transform xyz to yxy.
 * @method Image Yxy2XYZ(array $options = []) Transform yxy to xyz.
 * @method Image scRGB2XYZ(array $options = []) Transform scrgb to xyz.
 * @method Image XYZ2scRGB(array $options = []) Transform xyz to scrgb.
 * @method Image LabQ2Lab(array $options = []) 
 *     Unpack a labq image to float lab.
 * @method Image Lab2LabQ(array $options = []) 
 *     Transform float lab to labq coding.
 * @method Image LabQ2LabS(array $options = []) 
 *     Unpack a labq image to short lab.
 * @method Image LabS2LabQ(array $options = []) 
 *     Transform short lab to labq coding.
 * @method Image LabS2Lab(array $options = []) 
 *     Transform signed short lab to float.
 * @method Image Lab2LabS(array $options = []) 
 *     Transform float lab to signed short.
 * @method Image rad2float(array $options = []) 
 *     Unpack radiance coding to float rgb.
 * @method Image float2rad(array $options = []) 
 *     Transform float rgb to radiance coding.
 * @method Image LabQ2sRGB(array $options = []) Convert a labq image to srgb.
 * @method Image sRGB2HSV(array $options = []) Transform srgb to hsv.
 * @method Image HSV2sRGB(array $options = []) Transform hsv to srgb.
 * @method Image icc_import(array $options = []) 
 *     Import from device with icc profile.
 * @method Image icc_export(array $options = []) 
 *     Output to device with icc profile.
 * @method Image icc_transform(string $output_profile, array $options = []) 
 *     Transform between devices with icc profiles.
 * @method Image dE76(Image $right, array $options = []) Calculate de76.
 * @method Image dE00(Image $right, array $options = []) Calculate de00.
 * @method Image dECMC(Image $right, array $options = []) Calculate decmc.
 * @method Image sRGB2scRGB(array $options = []) 
 *     Convert an srgb image to scrgb.
 * @method Image scRGB2BW(array $options = []) Convert scrgb to bw.
 * @method Image scRGB2sRGB(array $options = []) 
 *     Convert an scrgb image to srgb.
 * @method Image maplut(Image $lut, array $options = []) 
 *     Map an image though a lut.
 * @method integer percent(float $percent, array $options = []) 
 *     Find threshold for percent of pixels.
 * @method Image stdif(integer $width, integer $height, array $options = []) 
 *     Statistical difference.
 * @method Image hist_cum(array $options = []) Form cumulative histogram.
 * @method Image hist_match(Image $ref, array $options = []) 
 *     Match two histograms.
 * @method Image hist_norm(array $options = []) Normalise histogram.
 * @method Image hist_equal(array $options = []) Histogram equalisation.
 * @method Image hist_plot(array $options = []) Plot histogram.
 * @method Image hist_local(integer $width, integer $height, 
 *     array $options = []) Local histogram equalisation.
 * @method bool hist_ismonotonic(array $options = []) Test for monotonicity.
 * @method float hist_entropy(array $options = []) Estimate image entropy.
 * @method Image conv(Image $mask, array $options = []) Convolution operation.
 * @method Image conva(Image $mask, array $options = []) 
 *     Approximate integer convolution.
 * @method Image convf(Image $mask, array $options = []) 
 *     Float convolution operation.
 * @method Image convi(Image $mask, array $options = []) 
 *     Int convolution operation.
 * @method Image compass(Image $mask, array $options = []) 
 *     Convolve with rotating mask.
 * @method Image convsep(Image $mask, array $options = []) 
 *     Seperable convolution operation.
 * @method Image convasep(Image $mask, array $options = []) 
 *     Approximate separable integer convolution.
 * @method Image fastcor(Image $ref, array $options = []) Fast correlation.
 * @method Image spcor(Image $ref, array $options = []) Spatial correlation.
 * @method Image sharpen(array $options = []) Unsharp masking for print.
 * @method Image gaussblur(float $sigma, array $options = []) Gaussian blur.
 * @method Image fwfft(array $options = []) Forward fft.
 * @method Image invfft(array $options = []) Inverse fft.
 * @method Image freqmult(Image $mask, array $options = []) 
 *     Frequency-domain filtering.
 * @method Image spectrum(array $options = []) Make displayable power spectrum.
 * @method Image phasecor(Image $in2, array $options = []) 
 *     Calculate phase correlation.
 * @method Image morph(Image $mask,  $morph, array $options = []) 
 *     Morphology operation.
 * @method Image rank(integer $width, integer $height, integer $index, 
 *     array $options = []) Rank filter.
 * @method float countlines( $direction, array $options = []) 
 *     Count lines in an image.
 * @method Image labelregions(array $options = []) Label regions in an image.
 * @method Image draw_rect(array $ink, integer $left, integer $top, 
 *     integer $width, integer $height, array $options = []) 
 *     Paint a rectangle on an image.
 * @method Image draw_mask(array $ink, Image $mask, integer $x, integer $y, 
 *     array $options = []) Draw a mask on an image.
 * @method Image draw_line(array $ink, integer $x1, integer $y1, integer $x2, 
 *     integer $y2, array $options = []) Draw a line on an image.
 * @method Image draw_circle(array $ink, integer $cx, integer $cy, 
 *     integer $radius, array $options = []) Draw a circle on an image.
 * @method Image draw_flood(array $ink, integer $x, integer $y, 
 *     array $options = []) Flood-fill an area.
 * @method Image draw_image(Image $sub, integer $x, integer $y, 
 *     array $options = []) Paint an image into another image.
 * @method Image draw_smudge(integer $left, integer $top, integer $width, 
 *     integer $height, array $options = []) Blur a rectangle on an image.
 * @method Image merge(Image $sec,  $direction, integer $dx, integer $dy, 
 *     array $options = []) Merge two images.
 * @method Image mosaic(Image $sec,  $direction, integer $xref, integer $yref, 
 *     integer $xsec, integer $ysec, array $options = []) Mosaic two images.
 * @method Image mosaic1(Image $sec,  $direction, integer $xr1, integer $yr1, 
 *     integer $xs1, integer $ys1, integer $xr2, integer $yr2, integer $xs2, 
 *     integer $ys2, array $options = []) First-order mosaic of two images.
 * @method Image match(Image $sec, integer $xr1, integer $yr1, integer $xs1, 
 *     integer $ys1, integer $xr2, integer $yr2, integer $xs2, integer $ys2, 
 *     array $options = []) First-order match of two images.
 * @method Image globalbalance(array $options = []) 
 *     Global balance an image mosaic.
 */
