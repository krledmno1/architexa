/*******************************************************************************
 * Copyright (c) 2000, 2005 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
package com.architexa.org.eclipse.gef.palette;

import com.architexa.org.eclipse.gef.ui.palette.PaletteViewer;

import java.util.EventListener;


/**
 * Listens to changes in the palette.
 */
public interface PaletteListener
	extends EventListener
{

/**
 * A new tool was activated in the palette.
 * @param palette the source of the change
 * @param tool the new tool that was activated
 */
void activeToolChanged(PaletteViewer palette, ToolEntry tool);

}